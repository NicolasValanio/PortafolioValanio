'use strict';
function visualIcon(kind){
const shapes={
vue:'<path fill="currentColor" stroke="none" d="M2 5h5l5 9 5-9h5L12 23z"/><path fill="var(--bg)" stroke="none" d="M7 5h3l2 4 2-4h3l-5 9z"/>',
php:'<ellipse cx="12" cy="12" rx="11" ry="7"/><path d="m5 16 2-8h3a2 2 0 0 1 0 4H6m7-5-2 9m1-5h3l-1 5m3 0 2-8h2"/>',
js:'<rect x="2" y="2" width="20" height="20" rx="3" fill="currentColor" stroke="none"/><text x="5" y="17" fill="#191919" stroke="none" font-size="12" font-weight="bold" font-family="Arial">JS</text>',
db:'<ellipse cx="12" cy="5" rx="8" ry="3"/><path d="M4 5v14c0 4 16 4 16 0V5M4 12c0 4 16 4 16 0"/>',
react:'<ellipse cx="12" cy="12" rx="11" ry="4"/><ellipse cx="12" cy="12" rx="11" ry="4" transform="rotate(60 12 12)"/><ellipse cx="12" cy="12" rx="11" ry="4" transform="rotate(120 12 12)"/><circle cx="12" cy="12" r="1.5" fill="currentColor"/>',
tailwind:'<path fill="currentColor" stroke="none" d="M2 10c2-7 8-7 12-3 3 3 5 1 8-1-2 7-8 7-12 3-3-3-5-1-8 1zm0 8c2-7 8-7 12-3 3 3 5 1 8-1-2 7-8 7-12 3-3-3-5-1-8 1z"/>',
git:'<path d="m12 2 10 10-10 10L2 12z"/><path d="m8 6 8 8m-6-6v8"/><circle cx="10" cy="8" r="1.5"/><circle cx="10" cy="17" r="1.5"/><circle cx="16" cy="14" r="1.5"/>',
code:'<path d="m8 5-7 7 7 7m8-14 7 7-7 7m-2-17-4 20"/>',
html:'<path d="m4 2 2 18 6 2 6-2 2-18zM8 7h8l-.6 5H9l.3 4 3 .8 3-.8"/>',
css:'<path d="m4 2 2 18 6 2 6-2 2-18zM8 7h8l-1 9-3 1-3-1M9 11h7"/>',
node:'<path d="m12 2 9 5v10l-9 5-9-5V7z"/><path d="M8 16V8l8 8V8"/>',
bolt:'<path d="m14 1-11 13h8l-1 9 11-14h-8z"/>',
window:'<rect x="2" y="4" width="20" height="16" rx="3"/><path d="M2 9h20M7 4v5m7 4 3 2-3 2m-4-4-3 2 3 2"/>',
pen:'<path d="m15 3 6 6-10 10-8 2 2-8zM13 5l6 6M3 21l5-5"/><circle cx="9" cy="15" r="1"/>',
terminal:'<rect x="2" y="3" width="20" height="18" rx="3"/><path d="m6 8 4 4-4 4m7 0h5"/>',
api:'<circle cx="5" cy="12" r="3"/><circle cx="19" cy="5" r="3"/><circle cx="19" cy="19" r="3"/><path d="m8 11 8-5M8 13l8 5"/>',
responsive:'<rect x="2" y="3" width="14" height="13" rx="2"/><rect x="15" y="9" width="7" height="13" rx="1.5"/><path d="M8 16v5m-4 0h9"/>',
};return '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">'+(shapes[kind]||shapes.code)+'</svg>';
}
function techInfo(label){const s=label.toLowerCase();if(s.includes('vue'))return ['vue','#4277bd'];if(s.includes('php'))return ['php','#95baff'];if(s==='javascript')return ['js','#f4ce54'];if(s.includes('postgres')||s.includes('mysql')||s==='sql')return ['db','#66b6ed'];if(s.includes('react'))return ['react','#60d1ed'];if(s.includes('tailwind'))return ['tailwind','#49c5d4'];if(s.includes('git'))return ['git','#7eaeff'];if(s.includes('html'))return ['html','#82baff'];if(s.includes('css'))return ['css','#8aaaff'];if(s.includes('node'))return ['node','#7397c6'];if(s.includes('vite'))return ['bolt','#c3d8ff'];if(s.includes('rest')||s==='jwt')return ['api','#9fcaff'];if(s.includes('responsive'))return ['responsive','#6795d2'];return ['code','#b9d5ff'];}
function techBadge(label){const [kind,color]=techInfo(label);return '<span class="tech-badge" style="--tech:'+color+'">'+visualIcon(kind)+'<span>'+label+'</span></span>';}
