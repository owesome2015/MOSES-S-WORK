/* config.js */
params.PageBgColor = params.PageBgColor||"#d7d7d7";

slideshow_css = '$CssPath$style.css';
thumbs = {margin: 3, padding: 1};

files.push({ 'src': 'backgnd/'+params.TemplateName+'/fonts/ws-ctrl-slim.eot', dest: '$CssPath$ws-ctrl-slim.eot' });
files.push({ 'src': 'backgnd/'+params.TemplateName+'/fonts/ws-ctrl-slim.svg', dest: '$CssPath$ws-ctrl-slim.svg' });
files.push({ 'src': 'backgnd/'+params.TemplateName+'/fonts/ws-ctrl-slim.ttf', dest: '$CssPath$ws-ctrl-slim.ttf' });
files.push({ 'src': 'backgnd/'+params.TemplateName+'/fonts/ws-ctrl-slim.woff', dest: '$CssPath$ws-ctrl-slim.woff' });


if (params.Thumbnails || params.ShowBullets){
	params.ThumbWidthHalf = Math.round(params.ThumbWidth/2);
	files.push( { 'src': 'backgnd/'+params.TemplateName+'/style-tooltip.css', 'dest': slideshow_css, 'filters': ['params'] } );
}

params.addCss += [
	"",
	"@font-face {",
	"  font-family: 'ws-ctrl-slim';",
	"  src: url('ws-ctrl-slim.eot');",
	"  src: url('ws-ctrl-slim.eot#iefix') format('embedded-opentype'),",
	"       url('ws-ctrl-slim.svg#ws-ctrl-slim') format('svg');",
	"  font-weight: normal;",
	"  font-style: normal;",
	"}",
	"@font-face {",
	"  font-family: 'ws-ctrl-slim';",
	"  src: url('data:application/octet-stream;base64,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') format('woff'),",
	"       url('data:application/octet-stream;base64,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') format('truetype');",
	"}"
].join('\n');

// call this function at the end of each template
finalize();