/**
 * MIT License
 *
 * Copyright (c) 2022 FoxxoSnoot
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
 */

let webhooks = [];
let instances = [];
let i = 0;

const { existsSync, readFileSync } = require('fs');
const { join } = require('path');
const { WebhookClient } = require('discord.js');

const { emitter, check, notify } = require('./notifier');

const INSTANCES_FILE = join(__dirname, '../', 'config', 'instances.json');
const DELAY_TIME_SECONDS = 10;

if (existsSync(INSTANCES_FILE))
	instances = JSON.parse(readFileSync(INSTANCES_FILE));

instances.forEach((instance) => {	
	i++;
	
	if (!instance.server_name)
		instance.server_name = `Nameless Instance ${i}`;
	
	if (!instance.webhook.token || !instance.webhook.user_id)
		return console.error(`No token or user id specified for ${instance.server_name}.`);
	
	webhooks.push({
		server_name: instance.server_name,
		hook: new WebhookClient(instance.webhook.user_id, instance.webhook.token)
	});
	
	console.log(`Registered the webhook for ${instance.server_name}.`);
});

emitter.on('notify', (data) => notify(webhooks, data.item, data.type));
console.log(`Notifier is running. Currently delay time is ${DELAY_TIME_SECONDS} seconds.`);

setInterval(check, 1000 * DELAY_TIME_SECONDS);