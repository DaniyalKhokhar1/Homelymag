import{g as t,r}from"./params.597cd0f5.js";import{S as u}from"./LogoGear.55b490aa.js";import{_ as n,c as a,f as i,d as _,r as g,o as c}from"./_plugin-vue_export-helper.2d9794a3.js";const k={mounted(){if(t()["aioseo-scroll"]&&setTimeout(()=>{this.$scrollTo(`#${t()["aioseo-scroll"]}`,{offset:-130,container:this.scrollContainer||"body"}),r("aioseo-scroll")},this.scrollTimeout||500),t()["aioseo-highlight"]){const s=t()["aioseo-scroll"]?this.scrollAndHighlightTimeout||1500:this.highlightTimeout||500;setTimeout(()=>{const o=document.querySelectorAll(`#${t()["aioseo-highlight"].replace(/,/g,", #").replace(/%2C/ig,", #")}`);o.length&&o.forEach(e=>{e.classList.add("aioseo-row-highlight"),setTimeout(()=>{e.classList.remove("aioseo-row-highlight")},1500)}),r("aioseo-highlight")},s)}}};const d={components:{SvgAioseoLogoGear:u},data(){return{strings:{boldText:this.$t.sprintf("<strong>%1$s %2$s</strong>","AIOSEO",this.$isPro?"Pro":""),linkText:this.$t.__("Click here to learn more",this.$td)}}},computed:{link(){return this.$t.sprintf('<strong><a href="%1$s" target="_blank" class="text-white">%2$s</a></strong>',this.$links.getDocUrl("restApi"),this.strings.linkText)},upgradeText(){return this.$t.sprintf(this.$t.__("%1$s relies on the WordPress Rest API and your site might have it disabled. %2$s.",this.$td),this.strings.boldText,this.link)}},mounted(){document.body.classList.add("aioseo-has-bar")},beforeUnmount(){document.body.classList.remove("aioseo-has-bar")}},p={class:"aioseo-api-bar"},m={class:"upgrade-text"},f=["innerHTML"];function $(s,o,e,T,v,l){const h=g("svg-aioseo-logo-gear");return c(),a("div",p,[i("div",m,[_(h),i("div",{innerHTML:l.upgradeText},null,8,f)])])}const C=n(d,[["render",$]]),x={};function y(s,o){return c(),a("div")}const P=n(x,[["render",y]]);export{C,k as S,P as a};