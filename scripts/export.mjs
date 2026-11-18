import fs from 'node:fs';
fs.mkdirSync('dist/assets',{recursive:true});
fs.copyFileSync('views/portfolio.html','dist/index.html');
fs.copyFileSync('assets/app.js','dist/assets/app.js');
fs.copyFileSync('assets/style.css','dist/assets/style.css');

fs.copyFileSync('assets/icons.js','dist/assets/icons.js');

fs.copyFileSync('assets/logo-nicolas.png','dist/assets/logo-nicolas.png');

fs.copyFileSync('assets/editorial.css','dist/assets/editorial.css');

fs.cpSync('assets/certificates','dist/assets/certificates',{recursive:true});
for (const name of ['panachis','dinares','guitarla']) { const from='assets/previews/'+name;const to='dist/assets/previews/'+name;fs.mkdirSync(to,{recursive:true});fs.copyFileSync(from+'/index.html',to+'/index.html');if(name==='panachis'){fs.copyFileSync(from+'/style.css',to+'/style.css');fs.cpSync(from+'/img',to+'/img',{recursive:true});}if(name==='dinares'){fs.cpSync(from+'/src/CSS',to+'/src/CSS',{recursive:true});fs.cpSync(from+'/src/IMG',to+'/src/IMG',{recursive:true});}if(name==='guitarla'){fs.mkdirSync(to+'/src',{recursive:true});fs.copyFileSync(from+'/src/index.css',to+'/src/index.css');}}

fs.copyFileSync('assets/presentacion-proyecto.png','dist/assets/presentacion-proyecto.png');
