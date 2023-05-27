import{B as C}from"./HighlightToggle.9350ac53.js";import{C as P}from"./index.fd0fcee8.js";import{C as A}from"./Tooltip.ae0bcccb.js";import{G as k,a as B}from"./Row.5e452de4.js";import{_ as D,r as p,o as l,c as g,f as o,h as _,w as r,t,e as c,a as m,F as N,i as w,d as y,n as L}from"./_plugin-vue_export-helper.2d9794a3.js";const O={components:{BaseHighlightToggle:C,CoreAlert:P,CoreTooltip:A,GridColumn:k,GridRow:B},props:{type:{type:String,required:!0},options:{type:Object,required:!0},registeredPostTypes:Object,excluded:{type:Array,default(){return[]}}},data(){return{strings:{label:this.$t.__("Label:",this.$td),name:this.$t.__("Slug:",this.$td),noPostTypes:this.$t.__("No post types available.",this.$td),noTaxonomies:this.$t.__("No taxonomies available.",this.$td),noPostTypesDescription:this.$t.__("All post types are set to noindex or your site does not have any post types registered that are supported by this feature.",this.$td),noTaxonomiesDescription:this.$t.__("All taxonomies are set to noindex or your site does not have any taxonomies registered that are supported by this feature.",this.$td)}}},computed:{getRegisteredPostTypes(){return this.registeredPostTypes||this.$aioseo.postData},postTypes(){return this.getRegisteredPostTypes[this.type].filter(e=>!this.excluded.includes(e.name))}},methods:{emitInput(e){this.$emit("input",e)},updateValue(e,d){if(e){const u=this.options[this.type].included;u.push(d.name),this.options[this.type].included=u;return}const n=this.options[this.type].included.findIndex(u=>u===d.name);n!==-1&&this.options[this.type].included.splice(n,1)},getValue(e){return this.options[this.type].included.includes(e.name)},isActive(e){return this.options[this.type].included.findIndex(n=>n===e.name)!==-1}}},R={class:"aioseo-post-type-options-toggle"},$={class:"post-type-options-settings"},G={class:"aioseo-description"},I=o("br",null,null,-1);function S(e,d,n,u,a,i){const h=p("core-alert"),f=p("core-tooltip"),x=p("base-highlight-toggle"),T=p("grid-column"),b=p("grid-row");return l(),g("div",R,[o("div",$,[i.postTypes.length===0&&n.type==="postTypes"?(l(),_(h,{key:0,type:"blue"},{default:r(()=>[o("strong",null,t(a.strings.noPostTypes),1),c(" "+t(a.strings.noPostTypesDescription),1)]),_:1})):m("",!0),i.postTypes.length===0&&n.type==="taxonomies"?(l(),_(h,{key:1,type:"blue"},{default:r(()=>[o("strong",null,t(a.strings.noTaxonomies),1),c(" "+t(a.strings.noTaxonomiesDescription),1)]),_:1})):m("",!0),0<i.postTypes.length?(l(),_(b,{key:2},{default:r(()=>[(l(!0),g(N,null,w(i.postTypes,(s,v)=>(l(),_(T,{md:"6",key:v},{default:r(()=>[y(x,{size:"medium",active:i.isActive(s),name:s.name,type:"checkbox",modelValue:i.getValue(s),"onUpdate:modelValue":V=>i.updateValue(V,s)},{default:r(()=>[y(f,null,{tooltip:r(()=>[o("div",G,[c(t(a.strings.label)+" ",1),o("strong",null,t(s.label),1),I,c(" "+t(a.strings.name)+" ",1),o("strong",null,t(s.name),1)])]),default:r(()=>[o("span",{class:L(["icon dashicons",`${s.icon||"dashicons-admin-post"}`])},null,2)]),_:2},1024),c(" "+t(s.label),1)]),_:2},1032,["active","name","modelValue","onUpdate:modelValue"])]),_:2},1024))),128))]),_:1})):m("",!0)])])}const E=D(O,[["render",S]]);export{E as C};
