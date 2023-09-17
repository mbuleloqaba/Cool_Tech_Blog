var G=Object.create;var k=Object.defineProperty;var X=Object.getOwnPropertyDescriptor;var Z=Object.getOwnPropertyNames;var ee=Object.getPrototypeOf,re=Object.prototype.hasOwnProperty;var te=(e,r)=>{for(var n in r)k(e,n,{get:r[n],enumerable:!0})},L=(e,r,n,a)=>{if(r&&typeof r=="object"||typeof r=="function")for(let t of Z(r))!re.call(e,t)&&t!==n&&k(e,t,{get:()=>r[t],enumerable:!(a=X(r,t))||a.enumerable});return e};var x=(e,r,n)=>(n=e!=null?G(ee(e)):{},L(r||!e||!e.__esModule?k(n,"default",{value:e,enumerable:!0}):n,e)),oe=e=>L(k({},"__esModule",{value:!0}),e);var le={};te(le,{Head:()=>W,Link:()=>K,createInertiaApp:()=>w,router:()=>Y.router,useForm:()=>S,usePage:()=>B,useRemember:()=>N});module.exports=oe(le);var Y=require("@inertiajs/core");var T=require("@inertiajs/core"),u=require("vue");var I=require("@inertiajs/core"),M=x(require("lodash.clonedeep"),1),ne={created(){if(!this.$options.remember)return;Array.isArray(this.$options.remember)&&(this.$options.remember={data:this.$options.remember}),typeof this.$options.remember=="string"&&(this.$options.remember={data:[this.$options.remember]}),typeof this.$options.remember.data=="string"&&(this.$options.remember={data:[this.$options.remember.data]});let e=this.$options.remember.key instanceof Function?this.$options.remember.key.call(this):this.$options.remember.key,r=I.router.restore(e),n=this.$options.remember.data.filter(t=>!(this[t]!==null&&typeof this[t]=="object"&&this[t].__rememberable===!1)),a=t=>this[t]!==null&&typeof this[t]=="object"&&typeof this[t].__remember=="function"&&typeof this[t].__restore=="function";n.forEach(t=>{this[t]!==void 0&&r!==void 0&&r[t]!==void 0&&(a(t)?this[t].__restore(r[t]):this[t]=r[t]),this.$watch(t,()=>{I.router.remember(n.reduce((l,p)=>({...l,[p]:(0,M.default)(a(p)?this[p].__remember():this[p])}),{}),e)},{immediate:!0,deep:!0})})}},R=ne;var C=require("@inertiajs/core"),g=x(require("lodash.clonedeep"),1),H=x(require("lodash.isequal"),1),A=require("vue");function S(e,r){let n=typeof e=="string"?e:null,a=typeof e=="string"?r:e,t=n?C.router.restore(n):null,l=typeof a=="object"?(0,g.default)(a):(0,g.default)(a()),p=null,d=null,y=o=>o,b=(0,A.reactive)({...t?t.data:(0,g.default)(l),isDirty:!1,errors:t?t.errors:{},hasErrors:!1,processing:!1,progress:null,wasSuccessful:!1,recentlySuccessful:!1,data(){return Object.keys(l).reduce((o,s)=>(o[s]=this[s],o),{})},transform(o){return y=o,this},defaults(o,s){if(typeof a=="function")throw new Error("You cannot call `defaults()` when using a function to define your form data.");return typeof o>"u"?l=this.data():l=Object.assign({},(0,g.default)(l),typeof o=="string"?{[o]:s}:o),this},reset(...o){let s=typeof a=="object"?(0,g.default)(l):(0,g.default)(a()),i=(0,g.default)(s);return o.length===0?(l=i,Object.assign(this,s)):Object.keys(s).filter(c=>o.includes(c)).forEach(c=>{l[c]=i[c],this[c]=s[c]}),this},setError(o,s){return Object.assign(this.errors,typeof o=="string"?{[o]:s}:o),this.hasErrors=Object.keys(this.errors).length>0,this},clearErrors(...o){return this.errors=Object.keys(this.errors).reduce((s,i)=>({...s,...o.length>0&&!o.includes(i)?{[i]:this.errors[i]}:{}}),{}),this.hasErrors=Object.keys(this.errors).length>0,this},submit(o,s,i={}){let c=y(this.data()),P={...i,onCancelToken:m=>{if(p=m,i.onCancelToken)return i.onCancelToken(m)},onBefore:m=>{if(this.wasSuccessful=!1,this.recentlySuccessful=!1,clearTimeout(d),i.onBefore)return i.onBefore(m)},onStart:m=>{if(this.processing=!0,i.onStart)return i.onStart(m)},onProgress:m=>{if(this.progress=m,i.onProgress)return i.onProgress(m)},onSuccess:async m=>{this.processing=!1,this.progress=null,this.clearErrors(),this.wasSuccessful=!0,this.recentlySuccessful=!0,d=setTimeout(()=>this.recentlySuccessful=!1,2e3);let z=i.onSuccess?await i.onSuccess(m):null;return l=(0,g.default)(this.data()),this.isDirty=!1,z},onError:m=>{if(this.processing=!1,this.progress=null,this.clearErrors().setError(m),i.onError)return i.onError(m)},onCancel:()=>{if(this.processing=!1,this.progress=null,i.onCancel)return i.onCancel()},onFinish:m=>{if(this.processing=!1,this.progress=null,p=null,i.onFinish)return i.onFinish(m)}};o==="delete"?C.router.delete(s,{...P,data:c}):C.router[o](s,c,P)},get(o,s){this.submit("get",o,s)},post(o,s){this.submit("post",o,s)},put(o,s){this.submit("put",o,s)},patch(o,s){this.submit("patch",o,s)},delete(o,s){this.submit("delete",o,s)},cancel(){p&&p.cancel()},__rememberable:n===null,__remember(){return{data:this.data(),errors:this.errors}},__restore(o){Object.assign(this,o.data),this.setError(o.errors)}});return(0,A.watch)(b,o=>{b.isDirty=!(0,H.default)(b.data(),l),n&&C.router.remember((0,g.default)(o.__remember()),n)},{immediate:!0,deep:!0}),b}var f=(0,u.ref)(null),h=(0,u.ref)(null),$=(0,u.shallowRef)(null),_=(0,u.ref)(null),j=null,se=(0,u.defineComponent)({name:"Inertia",props:{initialPage:{type:Object,required:!0},initialComponent:{type:Object,required:!1},resolveComponent:{type:Function,required:!1},titleCallback:{type:Function,required:!1,default:e=>e},onHeadUpdate:{type:Function,required:!1,default:()=>()=>{}}},setup({initialPage:e,initialComponent:r,resolveComponent:n,titleCallback:a,onHeadUpdate:t}){f.value=r?(0,u.markRaw)(r):null,h.value=e,_.value=null;let l=typeof window>"u";return j=(0,T.createHeadManager)(l,a,t),l||(T.router.init({initialPage:e,resolveComponent:n,swapComponent:async p=>{f.value=(0,u.markRaw)(p.component),h.value=p.page,_.value=p.preserveState?_.value:Date.now()}}),T.router.on("navigate",()=>j.forceUpdate())),()=>{if(f.value){f.value.inheritAttrs=!!f.value.inheritAttrs;let p=(0,u.h)(f.value,{...h.value.props,key:_.value});return $.value&&(f.value.layout=$.value,$.value=null),f.value.layout?typeof f.value.layout=="function"?f.value.layout(u.h,p):(Array.isArray(f.value.layout)?f.value.layout:[f.value.layout]).concat(p).reverse().reduce((d,y)=>(y.inheritAttrs=!!y.inheritAttrs,(0,u.h)(y,{...h.value.props},()=>d))):p}}}}),V=se,q={install(e){T.router.form=S,Object.defineProperty(e.config.globalProperties,"$inertia",{get:()=>T.router}),Object.defineProperty(e.config.globalProperties,"$page",{get:()=>h.value}),Object.defineProperty(e.config.globalProperties,"$headManager",{get:()=>j}),e.mixin(R)}};function B(){return(0,u.reactive)({props:(0,u.computed)(()=>h.value?.props),url:(0,u.computed)(()=>h.value?.url),component:(0,u.computed)(()=>h.value?.component),version:(0,u.computed)(()=>h.value?.version),scrollRegions:(0,u.computed)(()=>h.value?.scrollRegions),rememberedState:(0,u.computed)(()=>h.value?.rememberedState)})}var U=require("@inertiajs/core"),D=require("vue");async function w({id:e="app",resolve:r,setup:n,title:a,progress:t={},page:l,render:p}){let d=typeof window>"u",y=d?null:document.getElementById(e),b=l||JSON.parse(y.dataset.page),o=c=>Promise.resolve(r(c)).then(P=>P.default||P),s=[],i=await o(b.component).then(c=>n({el:y,App:V,props:{initialPage:b,initialComponent:c,resolveComponent:o,titleCallback:a,onHeadUpdate:d?P=>s=P:null},plugin:q}));if(!d&&t&&(0,U.setupProgress)(t),d){let c=await p((0,D.createSSRApp)({render:()=>(0,D.h)("div",{id:e,"data-page":JSON.stringify(b),innerHTML:i?p(i):""})}));return{head:s,body:c}}}var J=require("vue"),ie=(0,J.defineComponent)({props:{title:{type:String,required:!1}},data(){return{provider:this.$headManager.createProvider()}},beforeUnmount(){this.provider.disconnect()},methods:{isUnaryTag(e){return["area","base","br","col","embed","hr","img","input","keygen","link","meta","param","source","track","wbr"].indexOf(e.type)>-1},renderTagStart(e){e.props=e.props||{},e.props.inertia=e.props["head-key"]!==void 0?e.props["head-key"]:"";let r=Object.keys(e.props).reduce((n,a)=>{let t=e.props[a];return["key","head-key"].includes(a)?n:t===""?n+` ${a}`:n+` ${a}="${t}"`},"");return`<${e.type}${r}>`},renderTagChildren(e){return typeof e.children=="string"?e.children:e.children.reduce((r,n)=>r+this.renderTag(n),"")},isFunctionNode(e){return typeof e.type=="function"},isComponentNode(e){return typeof e.type=="object"},isCommentNode(e){return/(comment|cmt)/i.test(e.type.toString())},isFragmentNode(e){return/(fragment|fgt|symbol\(\))/i.test(e.type.toString())},isTextNode(e){return/(text|txt)/i.test(e.type.toString())},renderTag(e){if(this.isTextNode(e))return e.children;if(this.isFragmentNode(e))return"";if(this.isCommentNode(e))return"";let r=this.renderTagStart(e);return e.children&&(r+=this.renderTagChildren(e)),this.isUnaryTag(e)||(r+=`</${e.type}>`),r},addTitleElement(e){return this.title&&!e.find(r=>r.startsWith("<title"))&&e.push(`<title inertia>${this.title}</title>`),e},renderNodes(e){return this.addTitleElement(e.flatMap(r=>this.resolveNode(r)).map(r=>this.renderTag(r)).filter(r=>r))},resolveNode(e){return this.isFunctionNode(e)?this.resolveNode(e.type()):this.isComponentNode(e)?(console.warn("Using components in the <Head> component is not supported."),[]):this.isTextNode(e)&&e.children?e:this.isFragmentNode(e)&&e.children?e.children.flatMap(r=>this.resolveNode(r)):this.isCommentNode(e)?[]:e}},render(){this.provider.update(this.renderNodes(this.$slots.default?this.$slots.default():[]))}}),W=ie;var F=require("@inertiajs/core"),E=require("vue"),ae=(0,E.defineComponent)({name:"Link",props:{as:{type:String,default:"a"},data:{type:Object,default:()=>({})},href:{type:String,required:!0},method:{type:String,default:"get"},replace:{type:Boolean,default:!1},preserveScroll:{type:Boolean,default:!1},preserveState:{type:Boolean,default:null},only:{type:Array,default:()=>[]},headers:{type:Object,default:()=>({})},queryStringArrayFormat:{type:String,default:"brackets"}},setup(e,{slots:r,attrs:n}){return()=>{let a=e.as.toLowerCase(),t=e.method.toLowerCase(),[l,p]=(0,F.mergeDataIntoQueryString)(t,e.href||"",e.data,e.queryStringArrayFormat);return a==="a"&&t!=="get"&&console.warn(`Creating POST/PUT/PATCH/DELETE <a> links is discouraged as it causes "Open Link in New Tab/Window" accessibility issues.

Please specify a more appropriate element using the "as" attribute. For example:

<Link href="${l}" method="${t}" as="button">...</Link>`),(0,E.h)(e.as,{...n,...a==="a"?{href:l}:{},onClick:d=>{(0,F.shouldIntercept)(d)&&(d.preventDefault(),F.router.visit(l,{data:p,method:t,replace:e.replace,preserveScroll:e.preserveScroll,preserveState:e.preserveState??t!=="get",only:e.only,headers:e.headers,onCancelToken:n.onCancelToken||(()=>({})),onBefore:n.onBefore||(()=>({})),onStart:n.onStart||(()=>({})),onProgress:n.onProgress||(()=>({})),onFinish:n.onFinish||(()=>({})),onCancel:n.onCancel||(()=>({})),onSuccess:n.onSuccess||(()=>({})),onError:n.onError||(()=>({}))}))}},r)}}}),K=ae;var O=require("@inertiajs/core"),Q=x(require("lodash.clonedeep"),1),v=require("vue");function N(e,r){if(typeof e=="object"&&e!==null&&e.__rememberable===!1)return e;let n=O.router.restore(r),a=(0,v.isReactive)(e)?v.reactive:v.ref,t=typeof e.__remember=="function"&&typeof e.__restore=="function",l=a(n===void 0?e:t?e.__restore(n):n);return(0,v.watch)(l,p=>{O.router.remember((0,Q.default)(t?e.__remember():p),r)},{immediate:!0,deep:!0}),l}
//# sourceMappingURL=index.js.map
