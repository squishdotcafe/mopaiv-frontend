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

let cache = {};

const { MessageEmbed } = require('discord.js');
const EventEmitter = require('events');
const Phin = require('phin');

const emitter = new EventEmitter();

async function check()
{
	let items = [];
	
	console.log('Checking items...');
	
	try {
		const data = await Phin({
			url: 'https://www.mopaiv.com/api/jcole/dreamz',
			parse: 'json'
		});
		
		items = (data.body.data).reverse();
	} catch (error) {
		console.error('Unable to receive items:', error.stack);
	}
	
	if (!items.length)
		return;
	
	if (!cache.length || Object.keys(cache).length > 50) {
		console.log('Resetting cache...');
		
		cache = [];
		// items.forEach((item) => cache[item.id] = item);
	}
	
	items.forEach((item) => {
		let isUpdated = Object.keys(cache).includes(item.id);
		let type = (isUpdated) ? 'update' : 'new';
		let notify = true; // Ghetto, I know.. But I CBA to convert this to a for loop lmao.
		
		if (isUpdated) {
			let cachedItem = cache[item.id];
			
			if (
				item.name == cachedItem.name &&
				item.cost == cachedItem.cost &&
				item.sale == cachedItem.sale &&
				item.image == cachedItem.image &&
				item.exclusive == cachedItem.exclusive
			) notify = false;
		}
		
		if (notify) {
			cache[item.id] = item;
			emitter.emit('notify', { type, item });
		}
	});
}

function notify(webhooks, item, type)
{
	let message = '';
	let isExclusive = item.exclusive == '1';
	let color = (!isExclusive) ? '#de544a' : '#0194f0';
	
	switch (type) {
		case 'new':
			console.log(`New Item: ${item.name} (ID: ${item.id})`);
			
			message = (isExclusive) ? 'New Exclusive Item' : 'New Item';
			break;
		case 'update':
			console.log(`Item Updated: ${item.name} (ID: ${item.id})`);
			
			message = (isExclusive) ? 'Exclusive Item Updated' : 'Item Updated';
			break;
		default:
			console.log('Invalid notify type.');
			return;
	}
	
	let embed = new MessageEmbed()
		.setColor(color)
		.setURL(`https://mopaiv.com/market/item/${item.id}`)
		.setTitle(item.name)
		.setDescription(`[View on Mopaiv](https://mopaiv.com/market/item/${item.id})`)
		.setThumbnail(`https://www.mopaiv.com/assets/market/${item.image}.png`)
		.addField('Price', (item.sale == '2') ? 'Offsale' : `<:currency:939281083504148481> ${item.cost}`, true);
	
	if (isExclusive)
		embed.addField('Stock', item.stock, true);
	
	webhooks.forEach((webhook) => {
		try {
			webhook.hook.send(`@everyone **${message}**`, embed);
			
			console.log(`Notified in ${webhook.server_name}.`);
		} catch (error) {
			console.error(`Unable to notify in ${webhook.server_name}:`, error.stack);
		}
	});
}

module.exports = { emitter, check, notify };