const http = require('http');
const fs = require('fs');
const url = require('url');
const fetch = require('node-fetch');

const Discord = require("discord.js");
const { prefix, token } = require("./config.json");

const client = new Discord.Client();

const queue = new Map();

const port = 53134;

http.createServer((req, res) => {
	let responseCode = 404;
	let content = '404 Error';

	const urlObj = url.parse(req.url, true);
	console.log("here!");

	if (urlObj.query.code) {
		const accessCode = urlObj.query.code;
		const data = {
			client_id: '284328882386108426',
			client_secret: 'B2ujzFBSbYtc_DMO8CHOp5pdns9Wb6cw',
			grant_type: 'authorization_code',
			redirect_uri: 'http://drinkinoutacups.com/discord/',
			code: accessCode,
			scope: 'identify guilds',
		};

		fetch('https://discordapp.com/api/oauth2/token', {
			method: 'POST',
			body: new URLSearchParams(data),
			headers: {
				'Content-Type': 'application/x-www-form-urlencoded',
			},
		})
			.then(discordRes => discordRes.json())
			.then(info => {
				console.log(info);
				return info;
			})
			.then(info => fetch('https://discordapp.com/api/users/@me', {
				headers: {
					authorization: `${info.token_type} ${info.access_token}`,
				},
			}))
			.then(userRes => userRes.json())
			.then(console.log);
	}

	if (urlObj.pathname === '/') {
		responseCode = 200;
		content = fs.readFileSync('./index.html');
	}

	res.writeHead(responseCode, {
		'content-type': 'text/html;charset=utf-8',
	});

	res.write(content);
	res.end();
})
.listen(port);

console.log("HTTP on Port:" + port);

//Bot

var guild = {};

client.once("ready", () => {
  guild = client.guilds.cache;
  console.log(guild);
  client.user.setPresence({
      status: 'invisible'
  })
});

client.once("reconnecting", () => {
  console.log("Reconnecting!");
});

client.once("disconnect", () => {
  console.log("Disconnect!");
});

client.login(token)

async function getRoles(userID) {
	var roles = [];
	console.log(guild.id);

	return roles;
}