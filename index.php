<?php
$siteName = "NoName";
$discordInvite = "https://discord.gg/zKDQjN3fh6";
$productName = "NoName BotNet";
$plans = [
  ['id'=>'basic','name'=>'Basic','price'=>'€10','tagline'=>'Starter essentials','popular'=>false,'features'=>['Concurrent: 1','Max Time: 60s','Cooldown: 10s','Without VIP']],
  ['id'=>'medium','name'=>'Medium','price'=>'€20','tagline'=>'Best balance','popular'=>true,'features'=>['Concurrent: 2','Max Time: 120s','Cooldown: 5s','With VIP']],
  ['id'=>'advanced','name'=>'Advanced','price'=>'€35','tagline'=>'Maximum power','popular'=>false,'features'=>['Concurrent: 3','Max Time: 180s','Cooldown: 0s','With VIP']],
];
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title><?php echo htmlspecialchars($siteName); ?></title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;800&family=JetBrains+Mono:wght@400;700&display=swap" rel="stylesheet">
<style>
:root{color-scheme:dark}
*{box-sizing:border-box}
body{margin:0;background:#000;color:#d1fae5;font-family:Inter,system-ui,Arial,sans-serif}
.container{max-width:1120px;margin:0 auto;padding:0 16px}
.nav{position:sticky;top:0;z-index:10;background:rgba(0,0,0,.55);backdrop-filter:blur(8px);border-bottom:1px solid rgba(16,185,129,.15)}
.nav-inner{display:flex;align-items:center;justify-content:space-between;padding:14px}
.brand{display:flex;align-items:center;gap:8px;font-weight:800;letter-spacing:.06em}
.brand-badge{width:24px;height:24px;border-radius:8px;border:1px solid rgba(52,211,153,.4);background:rgba(16,185,129,.2)}
.btn{display:inline-flex;align-items:center;gap:8px;border:1px solid rgba(52,211,153,.35);border-radius:10px;padding:8px 12px;color:#a7f3d0;text-decoration:none;background:rgba(0,0,0,.4)}
.btn:hover{background:rgba(16,185,129,.12)}
.hero{position:relative;text-align:center;padding:56px 0 18px}
.h1{font-size:clamp(28px,5.6vw,56px);font-weight:800;line-height:1.05;background:linear-gradient(to bottom,#a7f3d0,rgba(110,231,183,.6));-webkit-background-clip:text;background-clip:text;color:transparent;margin:0 auto 8px;max-width:900px}
.sub{color:rgba(209,250,229,.8);max-width:720px;margin:0 auto 22px}
.terminal{position:relative;max-width:860px;margin:18px auto 0;border-radius:18px;border:1px solid rgba(16,185,129,.35);background:rgba(0,0,0,.6);padding:0;box-shadow:0 10px 40px rgba(16,185,129,.12);overflow:hidden}
.tty-head{display:flex;align-items:center;gap:8px;color:rgba(110,231,183,.8);font:12px JetBrains Mono,monospace;padding:10px 14px;border-bottom:1px solid rgba(16,185,129,.15)}
.dot{width:8px;height:8px;border-radius:999px}
.dot.r{background:#ef4444cc}
.dot.y{background:#f59e0bcc}
.dot.g{background:#10b981cc}
.term-body{font:14px JetBrains Mono,monospace;height:260px;overflow:auto;background:rgba(0,0,0,.6);padding:12px;color:#6ee7b7}
.term-line{white-space:pre-wrap;word-break:break-word;margin-bottom:6px}
.term-input{display:flex;align-items:center;gap:8px;border-top:1px solid rgba(16,185,129,.15);background:#020202}
.term-input span{font:14px JetBrains Mono,monospace;color:#34d399;padding:10px 12px}
.term-input input{flex:1;background:transparent;border:0;outline:0;color:#eaffe9;font:14px JetBrains Mono,monospace;padding:10px 0}
.grid{display:grid;grid-template-columns:repeat(1,minmax(0,1fr));gap:14px;margin-top:26px;justify-items:center;text-align:center}
@media(min-width:768px){.grid{grid-template-columns:repeat(3,minmax(0,1fr))}}
.card{border:1px solid rgba(16,185,129,.2);background:rgba(0,0,0,.3);padding:16px;border-radius:16px;box-shadow:0 8px 28px rgba(0,0,0,.35);text-align:center;max-width:360px}
.card:hover{border-color:rgba(52,211,153,.4)}
.card h3{display:block;text-align:center;color:#6ee7b7;margin:0 0 6px;font-size:15px}
.card p{margin:0;color:rgba(209,250,229,.8);font-size:14px}
.pricing{margin-top:28px}
.pricing h2{display:flex;align-items:center;gap:8px;color:#a7f3d0;font-size:20px;margin:0 0 12px}
.plans{display:grid;grid-template-columns:repeat(1,minmax(0,1fr));gap:14px}
@media(min-width:768px){.plans{grid-template-columns:repeat(3,minmax(0,1fr))}}
.plan{position:relative;border-radius:16px;border:1px solid rgba(16,185,129,.25);background:rgba(0,0,0,.5);padding:18px;box-shadow:0 10px 30px rgba(0,0,0,.4)}
.plan.pop{border-color:rgba(52,211,153,.5);box-shadow:0 0 0 2px rgba(16,185,129,.25)}
.badge{position:absolute;right:16px;top:-10px;background:rgba(16,185,129,.25);border:1px solid rgba(52,211,153,.5);padding:4px 10px;border-radius:999px;font-size:11px;color:#d1fae5}
.plan h4{display:flex;align-items:center;gap:8px;color:#6ee7b7;margin:0 0 6px}
.price{font-size:26px;font-weight:800;color:#d1fae5;margin:0 0 6px}
.tag{color:rgba(209,250,229,.8);font-size:14px;margin:0 0 10px}
.features{list-style:none;padding:0;margin:0 0 14px;display:flex;flex-direction:column;gap:8px;color:#e6fff6}
.buy{display:inline-flex;align-items:center;justify-content:center;gap:8px;border-radius:10px;border:1px solid rgba(52,211,153,.45);padding:10px 12px;color:#e6fff6;text-decoration:none;background:rgba(16,185,129,.18)}
.buy:hover{background:rgba(16,185,129,.26)}
.footer{margin-top:48px;border-top:1px solid rgba(16,185,129,.15);padding:26px 0;color:rgba(209,250,229,.7);font-size:14px}
.matrix{position:fixed;inset:0;z-index:-1;opacity:.35}
.bgfx{position:fixed;inset:0;z-index:-2;background:radial-gradient(circle at 30% 20%,rgba(16,185,129,.12),transparent 40%),radial-gradient(circle at 80% 10%,rgba(5,150,105,.12),transparent 35%)}
</style>
</head>
<body>
<canvas class="matrix" id="matrix"></canvas>
<div class="bgfx"></div>
<nav class="nav">
  <div class="container nav-inner">
    <div class="brand"><div class="brand-badge"></div><span style="font-family:JetBrains Mono,monospace;font-size:13px;"><?php echo htmlspecialchars($siteName); ?></span></div>
    <div style="display:flex;gap:10px;align-items:center">
      <a class="btn" href="<?php echo htmlspecialchars($discordInvite); ?>">Join Discord</a>
    </div>
  </div>
</nav>
<main class="container">
  <section class="hero">
    <h1 class="h1">Looks like a <i>terminal</i>, but it's a <u style="text-decoration-color:rgba(16,185,129,.6)">store</u></h1>
    <p class="sub"><?php echo htmlspecialchars($productName); ?> — hacker‑style toolkit to build, experiment and push the limits. Pick a plan, then complete your purchase in our Discord.</p>
    <div class="terminal" id="terminal">
      <div class="tty-head"><div class="dot r"></div><div class="dot y"></div><div class="dot g"></div><span style="font-family:JetBrains Mono,monospace">/dev/tty0 – resolver</span></div>
      <div class="term-body" id="term-body"></div>
      <div class="term-input"><span>$</span><input id="term-input" autocomplete="off" placeholder="type: help | ip example.com | cfx 8boo93 | clear"></div>
    </div>
    <div class="grid">
      <div class="card"><h3>Signal Jammer</h3><p>Disrupt networks and block enemy comms.</p></div>
      <div class="card"><h3>Net Phantom</h3><p>Slip into systems and leave no trace.</p></div>
      <div class="card"><h3>Firewall Breaker</h3><p>Force entry through digital defenses.</p></div>
    </div>
    <div class="pricing">
      <h2>Choose your plan</h2>
      <div class="plans">
        <?php foreach ($plans as $p): ?>
          <div class="plan <?php echo $p['popular'] ? 'pop' : '' ?>">
            <?php if ($p['popular']): ?><div class="badge">Most popular</div><?php endif; ?>
            <h4><?php echo htmlspecialchars($p['name']); ?></h4>
            <div class="price"><?php echo htmlspecialchars($p['price']); ?></div>
            <div class="tag"><?php echo htmlspecialchars($p['tagline']); ?></div>
            <ul class="features">
              <?php foreach ($p['features'] as $f): ?>
                <li>✔ <?php echo htmlspecialchars($f); ?></li>
              <?php endforeach; ?>
            </ul>
            <a class="buy" href="<?php echo htmlspecialchars($discordInvite); ?>?plan=<?php echo urlencode($p['id']); ?>">Buy on Discord</a>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
  <footer class="footer">
    <div class="container" style="display:flex;align-items:center;justify-content:space-between;gap:16px;flex-wrap:wrap">
      <div class="brand"><div class="brand-badge"></div><span style="font-family:JetBrains Mono,monospace"><?php echo htmlspecialchars($siteName); ?></span></div>
      <div style="display:flex;gap:16px"><a class="btn" href="#pricing">Pricing</a><a class="btn" href="<?php echo htmlspecialchars($discordInvite); ?>">Discord</a></div>
      <div>© <?php echo date('Y'); ?> <?php echo htmlspecialchars($siteName); ?></div>
    </div>
  </footer>
</main>
<script>
const termBody=document.getElementById('term-body');
const termInput=document.getElementById('term-input');
function println(s){const d=document.createElement('div');d.className='term-line';d.textContent=s;termBody.appendChild(d);termBody.scrollTop=termBody.scrollHeight}
function help(){
  println('commands:');
  println('  help      show this help');
  println('  ip <host> resolve IPv4/IPv6 using DNS over HTTPS');
  println('  cfx <code or full url>  fetch FiveM server info by CFX code');
  println('  clear     clear the screen');
  println("examples: ip example.com | cfx 8boo93 | cfx cfx.re/join/8boo93");
}
async function resolveHost(host){
  try{
    const a=await fetch('https://dns.google/resolve?name='+encodeURIComponent(host)+'&type=A').then(r=>r.json());
    const aaaa=await fetch('https://dns.google/resolve?name='+encodeURIComponent(host)+'&type=AAAA').then(r=>r.json());
    const v4=(a.Answer||[]).filter(x=>x.type===1).map(x=>x.data);
    const v6=(aaaa.Answer||[]).filter(x=>x.type===28).map(x=>x.data);
    if(v4.length===0&&v6.length===0){println('no records');return}
    if(v4.length) println('A:   '+v4.join(', '));
    if(v6.length) println('AAAA:'+v6.join(', '));
  }catch(e){println('error resolving host')}
}
async function fetchCFX(input){
  let code=input.trim();
  const match=code.match(/cfx\.re\/join\/([A-Za-z0-9]+)/);
  if(match){code=match[1];}
  try{
    const res=await fetch('https://servers-frontend.fivem.net/api/servers/single/'+encodeURIComponent(code),{headers:{'accept':'application/json'}});
    if(!res.ok){println('request failed: '+res.status);return}
    const data=await res.json();
    const d=data.Data||{};
    println('name: '+(d.hostname||'n/a'));
    println('players: '+(d.clients??'n/a')+' / '+(d.sv_maxclients??'n/a'));
    const eps=d.connectEndPoints||d.connectEndpoints||d.endpoints||[];
    if(eps.length) println('endpoints: '+eps.join(', '));
    else println('endpoints: n/a');
  }catch(e){
    println('blocked by CORS or protected by Cloudflare');
  }
}
termInput.addEventListener('keydown',e=>{
  if(e.key==='Enter'){
    const v=termInput.value.trim();
    if(!v) return; println('$ '+v); termInput.value='';
    const [cmd,...rest]=v.split(/\s+/); const arg=rest.join(' ');
    if(cmd==='help'){help()}
    else if(cmd==='ip'&&arg){resolveHost(arg)}
    else if(cmd==='cfx'&&arg){fetchCFX(arg)}
    else if(cmd==='clear'){termBody.innerHTML=''}
    else println('unknown command');
  }
});
println('type "help" to get started');
(function(){
  const canvas=document.getElementById('matrix');
  const ctx=canvas.getContext('2d');
  let w,h,cols,drops;const chars="01<>[]{}\\/—░▒▓█$#@*+~=|".split("");
  function resize(){w=canvas.width=window.innerWidth;h=canvas.height=window.innerHeight;cols=Math.floor(w/14);drops=Array(cols).fill(1)}
  function draw(){ctx.fillStyle='rgba(0,0,0,0.08)';ctx.fillRect(0,0,w,h);ctx.fillStyle='#00ff88';ctx.font='14px monospace';drops.forEach((y,i)=>{const t=chars[Math.floor(Math.random()*chars.length)];const x=i*14;ctx.fillText(t,x,y*14);if(y*14>h&&Math.random()>0.975)drops[i]=0;drops[i]=y+1});requestAnimationFrame(draw)}
  resize();draw();window.addEventListener('resize',resize)
})();
</script>
</body>
</html>