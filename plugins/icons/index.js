const path = require('path');
const fs = require('fs');
const active = {};

function generate(params, forced) {
	if (active[params.folder] || forced) {
		const files = fs.readdirSync(params.folder);
		let result = '<template>\n<!-- eslint-disable -->\n<svg style="display: none">\n';
		files.forEach((file) => {
			if (/\.svg$/i.test(file)) {
				let data = fs.readFileSync(path.join(params.folder, file), { encoding: 'utf8' });
				data = data.replace(/\s(width|height)="\d+"/igm, '');
				if (!/-color\.svg$/i.test(file)) {
					data = data.replace(/(fill|stroke)=["'](?!none)(.*)["']/igm, '$1="currentColor"');
				}
				result += `<symbol id="${file.replace(/\.svg$/i, '')}">\n${data}\n</symbol>\n`;
			}
		});
		result += '</svg>\n<!-- eslint-enable -->\n</template>\n';
		fs.writeFileSync(params.result, result);
		if (forced) {
			setTimeout(() => {
				active[params.folder] = true;
			}, 5000);
		}
		console.log(`Sprite generated: ${params.result}`);
	}
}

function init(arr) {
	if (!process.argv.includes('build')) {
		const chokidar = require('chokidar');
		arr.forEach((item) => {
			chokidar.watch(item.folder).on('all', (event, path) => {
				generate(item, false);
			});
		});
	}
	arr.forEach((item) => generate(item, true));
}

export default init;
