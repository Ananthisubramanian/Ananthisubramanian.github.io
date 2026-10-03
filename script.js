const data=[
{id:1,img:"assets/pwc-india.png",title:"PwC India Corporate Website",tag:"AEM · ENTERPRISE",cats:["aem"],tech:"AEM · HTML5 · CSS3 · JavaScript · jQuery · Bootstrap",summary:"Created and revamped pages using AEM components, templates and content fragments. Built responsive campaign, service and industry layouts and supported large content releases.",detail:"Worked on an ongoing PwC India corporate website engagement, including AEM authoring, reusable components, page properties, metadata, OG tags, content dumps, DAM assets, cross-browser testing and production validation.",role:"Web Developer",result:"Responsive enterprise publishing and production support"},
{id:2,img:"assets/toruscope.png",title:"Toruscope",tag:"WORDPRESS · SEO",cats:["wordpress","php"],tech:"WordPress · PHP · MySQL · HTML5 · CSS3 · JavaScript",summary:"Converted Figma designs into a responsive WordPress blog with dynamic templates, category/listing/single-post views, web stories, SEO, caching and image optimisation.",detail:"Built reusable content modules with custom fields and WP_Query-driven sections, implemented pagination and dynamic content loading, integrated MakeStories.io and handled post-launch maintenance.",role:"Web Developer",result:"Client-editable blog platform with performance and SEO work"},
{id:3,img:"assets/raipur-green-energy.png",title:"Raipur Green Energy",tag:"PHP · MYSQL · AJAX",cats:["wordpress","php"],tech:"WordPress · PHP · MySQL · REST API · AJAX · JSON",summary:"Corporate WordPress site with custom agent registration/login, role-based access, REST API vehicle lookup and an admin approval workflow.",detail:"Built custom PHP/MySQL authentication outside the standard WordPress user flow, integrated a third-party vehicle REST API, handled validation and secure password storage, and created agent-management administration.",role:"Web Developer",result:"Custom agent portal and API-driven vehicle lookup"},
{id:4,img:"assets/soulfoods.png",title:"Soulfoods",tag:"SHOPIFY · E-COMMERCE",cats:["shopify"],tech:"Shopify · Liquid · HTML5 · CSS3 · JavaScript · jQuery",summary:"Maintained and enhanced an existing Shopify storefront, including Liquid templates, product/collection/cart changes and dynamic variant pricing and image switching.",detail:"Implemented multiple pack-size and jar-size purchase options using Shopify variants, updated product and cart templates, and resolved responsive and cross-browser storefront defects.",role:"Web Developer",result:"Ongoing e-commerce maintenance and enhancements"},
{id:5,img:null,title:"Sun Pharma Website Revamp",tag:"WORDPRESS MULTISITE",cats:["wordpress","php"],tech:"WordPress Multisite · PHP · MySQL · HTML5 · CSS3 · JavaScript",summary:"Led development, testing and maintenance for a WordPress Multisite revamp covering multiple regional sites.",detail:"Mapped and migrated legacy content, media and URL structures with redirects, developed shared and site-specific themes, configured roles and per-site administration, and handled pre/post-launch testing.",role:"Front End Developer",result:"Multi-site architecture and coordinated regional publishing"},
{id:6,img:null,title:"SUD Life Interactive Quiz",tag:"JAVASCRIPT · AJAX",cats:["php"],tech:"JavaScript · jQuery · PHP · MySQL · AJAX",summary:"Built an employee quiz application with question engine, countdown, scoring, result screens and an admin view for participant data.",detail:"Designed the MySQL schema, implemented AJAX question/answer flows, participant registration and duplicate checks, and built export/review functionality for scores and leaderboard data.",role:"Web Developer",result:"Responsive refresh-free interactive campaign application"},
{id:7,img:"assets/pricewaterhouse.png",title:"Pricewaterhouse.in Microsite",tag:"AEM · FIGMA",cats:["aem"],tech:"Figma · AEM · HTML5 · CSS3 · JavaScript · jQuery",summary:"Converted an approved Figma design into pixel-accurate responsive AEM templates and customised header/footer behaviour.",detail:"Implemented semantic markup, heading hierarchy and on-page SEO structure, optimised images/scripts/stylesheets and supported UAT fixes, go-live activities and post-launch content updates.",role:"Web Developer",result:"Responsive AEM microsite from approved design"},
{id:8,img:null,title:"Salaam Mumbai Foundation",tag:"PHP · CODEIGNITER",cats:["php"],tech:"PHP · CodeIgniter MVC · MySQL · HTML5 · CSS3 · JavaScript",summary:"Built a responsive event website using CodeIgniter MVC with registration/enquiry forms, validation, database storage and email notifications.",detail:"Developed MVC views, integrated controllers/models for dynamic event content and delivered design, development and testing within a 20-day deadline with a team of four.",role:"Front End Developer",result:"Event platform delivered for high-traffic event days"}
];

const skillData={
frontend:["HTML5","CSS3","JavaScript (ES6+)","jQuery","Bootstrap 4/5","AJAX","JSON","Responsive & Mobile-first Design","Cross-browser Compatibility","PSD/Figma to HTML","Responsive HTML Emailers"],
cms:["Adobe Experience Manager (AEM)","WordPress","WordPress Multisite","Shopify","Liquid","Drupal","AEM Components & Templates","Content Fragments","DAM / Asset Management"],
backend:["PHP","CodeIgniter (MVC)","MySQL","Custom Form & Mail Handling","Session Handling","Role-based Access","REST API Integration","JSON","Java (basic)"],
ops:["On-page SEO","Meta title/description & OG tags","Semantic Markup","Sitemap / robots","Image & Asset Optimisation","Page-speed Improvement","UAT & Production Support","WAR Deployments","E-KYC / ECOM Troubleshooting","Git / GitHub"]
};

const panel=document.getElementById("skillpanel");
function renderSkills(key="frontend"){
 const names=skillData[key]||skillData.frontend;
 panel.innerHTML=`<h3>${key==="frontend"?"Frontend development":key==="cms"?"CMS & platforms":key==="backend"?"Backend & data":"SEO, optimisation & production support"}</h3><p>${names.join("  ·  ")}</p>`;
}
document.querySelectorAll(".skilltab").forEach(b=>b.addEventListener("click",()=>{document.querySelectorAll(".skilltab").forEach(x=>x.classList.remove("active"));b.classList.add("active");renderSkills(b.dataset.skill)}));
renderSkills();

const grid=document.getElementById("projectgrid");
function renderProjects(filter="all"){
 const items=data.filter(x=>filter==="all"||x.cats.includes(filter));
 grid.innerHTML=items.map((p,i)=>`<article class="project ${p.id===1?"featured":""}" tabindex="0" data-id="${p.id}" aria-label="Open ${p.title}">${p.img?`<img class="projectimg" src="${p.img}" alt="${p.title} website screenshot" loading="lazy">`:""}<div class="num">${String(p.id).padStart(2,"0")}</div><div class="tag">${p.tag}</div><h3>${p.title}</h3><p>${p.summary}</p><div class="chips">${p.tech.split(" · ").slice(0,4).map(t=>`<span>${t}</span>`).join("")}</div><div class="viewhint">View case study →</div></article>`).join("");
 grid.querySelectorAll(".project").forEach(card=>{card.addEventListener("click",()=>openProject(+card.dataset.id));card.addEventListener("keydown",e=>{if(e.key==="Enter"||e.key===" "){e.preventDefault();openProject(+card.dataset.id)}})});
}
renderProjects();

document.querySelectorAll(".filter").forEach(b=>b.addEventListener("click",()=>{document.querySelectorAll(".filter").forEach(x=>x.classList.remove("active"));b.classList.add("active");renderProjects(b.dataset.filter)}));

const modal=document.getElementById("modal"), modalContent=document.getElementById("modalContent");
function openProject(id){
 const p=data.find(x=>x.id===id); if(!p)return;
 modalContent.innerHTML=`${p.img?`<img class="modalimage" src="${p.img}" alt="${p.title} website screenshot">`:""}<div class="modaltag">${p.tag}</div><h2 id="modalTitle">${p.title}</h2><p>${p.detail}</p><div class="modalmeta"><div><strong>Role</strong><span>${p.role}</span></div><div><strong>Technologies</strong><span>${p.tech}</span></div><div><strong>Project focus</strong><span>${p.result}</span></div><div><strong>Source</strong><span>Based on resume project details</span></div></div>`;
 modal.classList.add("show");modal.setAttribute("aria-hidden","false");document.getElementById("close").focus();
}
function closeModal(){modal.classList.remove("show");modal.setAttribute("aria-hidden","true")}
document.getElementById("close").addEventListener("click",closeModal);
modal.addEventListener("click",e=>{if(e.target===modal)closeModal()});
document.addEventListener("keydown",e=>{if(e.key==="Escape")closeModal()});

const nav=document.getElementById("nav");document.getElementById("menu").addEventListener("click",()=>nav.classList.toggle("open"));
document.querySelectorAll("#navlinks a").forEach(a=>a.addEventListener("click",()=>nav.classList.remove("open")));
window.addEventListener("scroll",()=>{const h=document.documentElement.scrollHeight-innerHeight;document.getElementById("progress").style.width=(h>0?(scrollY/h)*100:0)+"%"},{passive:true});
