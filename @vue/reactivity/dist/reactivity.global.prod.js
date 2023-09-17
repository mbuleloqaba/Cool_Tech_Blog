var VueReactivity=function(t){"use strict";function e(t,e){const n=Object.create(null),s=t.split(",");for(let i=0;i<s.length;i++)n[s[i]]=!0;return e?t=>!!n[t.toLowerCase()]:t=>!!n[t]}const n=()=>{},s=Object.assign,i=Object.prototype.hasOwnProperty,r=(t,e)=>i.call(t,e),c=Array.isArray,o=t=>"[object Map]"===f(t),u=t=>"function"==typeof t,a=t=>"symbol"==typeof t,h=t=>null!==t&&"object"==typeof t,l=Object.prototype.toString,f=t=>l.call(t),_=t=>"string"==typeof t&&"NaN"!==t&&"-"!==t[0]&&""+parseInt(t,10)===t,d=(t,e)=>!Object.is(t,e);let p;class v{constructor(t=!1){this.detached=t,this._active=!0,this.effects=[],this.cleanups=[],this.parent=p,!t&&p&&(this.index=(p.scopes||(p.scopes=[])).push(this)-1)}get active(){return this._active}run(t){if(this._active){const e=p;try{return p=this,t()}finally{p=e}}}on(){p=this}off(){p=this.parent}stop(t){if(this._active){let e,n;for(e=0,n=this.effects.length;e<n;e++)this.effects[e].stop();for(e=0,n=this.cleanups.length;e<n;e++)this.cleanups[e]();if(this.scopes)for(e=0,n=this.scopes.length;e<n;e++)this.scopes[e].stop(!0);if(!this.detached&&this.parent&&!t){const t=this.parent.scopes.pop();t&&t!==this&&(this.parent.scopes[this.index]=t,t.index=this.index)}this.parent=void 0,this._active=!1}}}function g(t,e=p){e&&e.active&&e.effects.push(t)}const y=t=>{const e=new Set(t);return e.w=0,e.n=0,e},w=t=>(t.w&S)>0,R=t=>(t.n&S)>0,b=new WeakMap;let m=0,S=1;let k;const O=Symbol(""),j=Symbol("");class E{constructor(t,e=null,n){this.fn=t,this.scheduler=e,this.active=!0,this.deps=[],this.parent=void 0,g(this,n)}run(){if(!this.active)return this.fn();let t=k,e=P;for(;t;){if(t===this)return;t=t.parent}try{return this.parent=k,k=this,P=!0,S=1<<++m,m<=30?(({deps:t})=>{if(t.length)for(let e=0;e<t.length;e++)t[e].w|=S})(this):x(this),this.fn()}finally{m<=30&&(t=>{const{deps:e}=t;if(e.length){let n=0;for(let s=0;s<e.length;s++){const i=e[s];w(i)&&!R(i)?i.delete(t):e[n++]=i,i.w&=~S,i.n&=~S}e.length=n}})(this),S=1<<--m,k=this.parent,P=e,this.parent=void 0,this.deferStop&&this.stop()}}stop(){k===this?this.deferStop=!0:this.active&&(x(this),this.onStop&&this.onStop(),this.active=!1)}}function x(t){const{deps:e}=t;if(e.length){for(let n=0;n<e.length;n++)e[n].delete(t);e.length=0}}let P=!0;const M=[];function V(){M.push(P),P=!1}function z(){const t=M.pop();P=void 0===t||t}function W(t,e,n){if(P&&k){let e=b.get(t);e||b.set(t,e=new Map);let s=e.get(n);s||e.set(n,s=y()),A(s)}}function A(t,e){let n=!1;m<=30?R(t)||(t.n|=S,n=!w(t)):n=!t.has(k),n&&(t.add(k),k.deps.push(t))}function N(t,e,n,s,i,r){const u=b.get(t);if(!u)return;let a=[];if("clear"===e)a=[...u.values()];else if("length"===n&&c(t)){const t=Number(s);u.forEach(((e,n)=>{("length"===n||n>=t)&&a.push(e)}))}else switch(void 0!==n&&a.push(u.get(n)),e){case"add":c(t)?_(n)&&a.push(u.get("length")):(a.push(u.get(O)),o(t)&&a.push(u.get(j)));break;case"delete":c(t)||(a.push(u.get(O)),o(t)&&a.push(u.get(j)));break;case"set":o(t)&&a.push(u.get(O))}if(1===a.length)a[0]&&T(a[0]);else{const t=[];for(const e of a)e&&t.push(...e);T(y(t))}}function T(t,e){const n=c(t)?t:[...t];for(const s of n)s.computed&&C(s);for(const s of n)s.computed||C(s)}function C(t,e){(t!==k||t.allowRecurse)&&(t.scheduler?t.scheduler():t.run())}const I=e("__proto__,__v_isRef,__isVue"),K=new Set(Object.getOwnPropertyNames(Symbol).filter((t=>"arguments"!==t&&"caller"!==t)).map((t=>Symbol[t])).filter(a)),D=H(),L=H(!1,!0),Y=H(!0),q=H(!0,!0),B=F();function F(){const t={};return["includes","indexOf","lastIndexOf"].forEach((e=>{t[e]=function(...t){const n=zt(this);for(let e=0,i=this.length;e<i;e++)W(n,0,e+"");const s=n[e](...t);return-1===s||!1===s?n[e](...t.map(zt)):s}})),["push","pop","shift","unshift","splice"].forEach((e=>{t[e]=function(...t){V();const n=zt(this)[e].apply(this,t);return z(),n}})),t}function G(t){const e=zt(this);return W(e,0,t),e.hasOwnProperty(t)}function H(t=!1,e=!1){return function(n,s,i){if("__v_isReactive"===s)return!t;if("__v_isReadonly"===s)return t;if("__v_isShallow"===s)return e;if("__v_raw"===s&&i===(t?e?kt:St:e?mt:bt).get(n))return n;const o=c(n);if(!t){if(o&&r(B,s))return Reflect.get(B,s,i);if("hasOwnProperty"===s)return G}const u=Reflect.get(n,s,i);return(a(s)?K.has(s):I(s))?u:(t||W(n,0,s),e?u:Ct(u)?o&&_(s)?u:u.value:h(u)?t?Et(u):jt(u):u)}}function J(t=!1){return function(e,n,s,i){let o=e[n];if(Mt(o)&&Ct(o)&&!Ct(s))return!1;if(!t&&(Vt(s)||Mt(s)||(o=zt(o),s=zt(s)),!c(e)&&Ct(o)&&!Ct(s)))return o.value=s,!0;const u=c(e)&&_(n)?Number(n)<e.length:r(e,n),a=Reflect.set(e,n,s,i);return e===zt(i)&&(u?d(s,o)&&N(e,"set",n,s):N(e,"add",n,s)),a}}const Q={get:D,set:J(),deleteProperty:function(t,e){const n=r(t,e),s=Reflect.deleteProperty(t,e);return s&&n&&N(t,"delete",e,void 0),s},has:function(t,e){const n=Reflect.has(t,e);return a(e)&&K.has(e)||W(t,0,e),n},ownKeys:function(t){return W(t,0,c(t)?"length":O),Reflect.ownKeys(t)}},U={get:Y,set:(t,e)=>!0,deleteProperty:(t,e)=>!0},X=s({},Q,{get:L,set:J(!0)}),Z=s({},U,{get:q}),$=t=>t,tt=t=>Reflect.getPrototypeOf(t);function et(t,e,n=!1,s=!1){const i=zt(t=t.__v_raw),r=zt(e);n||(e!==r&&W(i,0,e),W(i,0,r));const{has:c}=tt(i),o=s?$:n?At:Wt;return c.call(i,e)?o(t.get(e)):c.call(i,r)?o(t.get(r)):void(t!==i&&t.get(e))}function nt(t,e=!1){const n=this.__v_raw,s=zt(n),i=zt(t);return e||(t!==i&&W(s,0,t),W(s,0,i)),t===i?n.has(t):n.has(t)||n.has(i)}function st(t,e=!1){return t=t.__v_raw,!e&&W(zt(t),0,O),Reflect.get(t,"size",t)}function it(t){t=zt(t);const e=zt(this);return tt(e).has.call(e,t)||(e.add(t),N(e,"add",t,t)),this}function rt(t,e){e=zt(e);const n=zt(this),{has:s,get:i}=tt(n);let r=s.call(n,t);r||(t=zt(t),r=s.call(n,t));const c=i.call(n,t);return n.set(t,e),r?d(e,c)&&N(n,"set",t,e):N(n,"add",t,e),this}function ct(t){const e=zt(this),{has:n,get:s}=tt(e);let i=n.call(e,t);i||(t=zt(t),i=n.call(e,t)),s&&s.call(e,t);const r=e.delete(t);return i&&N(e,"delete",t,void 0),r}function ot(){const t=zt(this),e=0!==t.size,n=t.clear();return e&&N(t,"clear",void 0,void 0),n}function ut(t,e){return function(n,s){const i=this,r=i.__v_raw,c=zt(r),o=e?$:t?At:Wt;return!t&&W(c,0,O),r.forEach(((t,e)=>n.call(s,o(t),o(e),i)))}}function at(t,e,n){return function(...s){const i=this.__v_raw,r=zt(i),c=o(r),u="entries"===t||t===Symbol.iterator&&c,a="keys"===t&&c,h=i[t](...s),l=n?$:e?At:Wt;return!e&&W(r,0,a?j:O),{next(){const{value:t,done:e}=h.next();return e?{value:t,done:e}:{value:u?[l(t[0]),l(t[1])]:l(t),done:e}},[Symbol.iterator](){return this}}}}function ht(t){return function(...e){return"delete"!==t&&this}}function lt(){const t={get(t){return et(this,t)},get size(){return st(this)},has:nt,add:it,set:rt,delete:ct,clear:ot,forEach:ut(!1,!1)},e={get(t){return et(this,t,!1,!0)},get size(){return st(this)},has:nt,add:it,set:rt,delete:ct,clear:ot,forEach:ut(!1,!0)},n={get(t){return et(this,t,!0)},get size(){return st(this,!0)},has(t){return nt.call(this,t,!0)},add:ht("add"),set:ht("set"),delete:ht("delete"),clear:ht("clear"),forEach:ut(!0,!1)},s={get(t){return et(this,t,!0,!0)},get size(){return st(this,!0)},has(t){return nt.call(this,t,!0)},add:ht("add"),set:ht("set"),delete:ht("delete"),clear:ht("clear"),forEach:ut(!0,!0)};return["keys","values","entries",Symbol.iterator].forEach((i=>{t[i]=at(i,!1,!1),n[i]=at(i,!0,!1),e[i]=at(i,!1,!0),s[i]=at(i,!0,!0)})),[t,n,e,s]}const[ft,_t,dt,pt]=lt();function vt(t,e){const n=e?t?pt:dt:t?_t:ft;return(e,s,i)=>"__v_isReactive"===s?!t:"__v_isReadonly"===s?t:"__v_raw"===s?e:Reflect.get(r(n,s)&&s in e?n:e,s,i)}const gt={get:vt(!1,!1)},yt={get:vt(!1,!0)},wt={get:vt(!0,!1)},Rt={get:vt(!0,!0)},bt=new WeakMap,mt=new WeakMap,St=new WeakMap,kt=new WeakMap;function Ot(t){return t.__v_skip||!Object.isExtensible(t)?0:function(t){switch(t){case"Object":case"Array":return 1;case"Map":case"Set":case"WeakMap":case"WeakSet":return 2;default:return 0}}((t=>f(t).slice(8,-1))(t))}function jt(t){return Mt(t)?t:xt(t,!1,Q,gt,bt)}function Et(t){return xt(t,!0,U,wt,St)}function xt(t,e,n,s,i){if(!h(t))return t;if(t.__v_raw&&(!e||!t.__v_isReactive))return t;const r=i.get(t);if(r)return r;const c=Ot(t);if(0===c)return t;const o=new Proxy(t,2===c?s:n);return i.set(t,o),o}function Pt(t){return Mt(t)?Pt(t.__v_raw):!(!t||!t.__v_isReactive)}function Mt(t){return!(!t||!t.__v_isReadonly)}function Vt(t){return!(!t||!t.__v_isShallow)}function zt(t){const e=t&&t.__v_raw;return e?zt(e):t}const Wt=t=>h(t)?jt(t):t,At=t=>h(t)?Et(t):t;function Nt(t){P&&k&&A((t=zt(t)).dep||(t.dep=y()))}function Tt(t,e){const n=(t=zt(t)).dep;n&&T(n)}function Ct(t){return!(!t||!0!==t.__v_isRef)}function It(t){return Kt(t,!1)}function Kt(t,e){return Ct(t)?t:new Dt(t,e)}class Dt{constructor(t,e){this.__v_isShallow=e,this.dep=void 0,this.__v_isRef=!0,this._rawValue=e?t:zt(t),this._value=e?t:Wt(t)}get value(){return Nt(this),this._value}set value(t){const e=this.__v_isShallow||Vt(t)||Mt(t);t=e?t:zt(t),d(t,this._rawValue)&&(this._rawValue=t,this._value=e?t:Wt(t),Tt(this))}}function Lt(t){return Ct(t)?t.value:t}const Yt={get:(t,e,n)=>Lt(Reflect.get(t,e,n)),set:(t,e,n,s)=>{const i=t[e];return Ct(i)&&!Ct(n)?(i.value=n,!0):Reflect.set(t,e,n,s)}};class qt{constructor(t){this.dep=void 0,this.__v_isRef=!0;const{get:e,set:n}=t((()=>Nt(this)),(()=>Tt(this)));this._get=e,this._set=n}get value(){return this._get()}set value(t){this._set(t)}}class Bt{constructor(t,e,n){this._object=t,this._key=e,this._defaultValue=n,this.__v_isRef=!0}get value(){const t=this._object[this._key];return void 0===t?this._defaultValue:t}set value(t){this._object[this._key]=t}get dep(){return t=zt(this._object),e=this._key,null==(n=b.get(t))?void 0:n.get(e);var t,e,n}}class Ft{constructor(t){this._getter=t,this.__v_isRef=!0,this.__v_isReadonly=!0}get value(){return this._getter()}}function Gt(t,e,n){const s=t[e];return Ct(s)?s:new Bt(t,e,n)}class Ht{constructor(t,e,n,s){this._setter=e,this.dep=void 0,this.__v_isRef=!0,this.__v_isReadonly=!1,this._dirty=!0,this.effect=new E(t,(()=>{this._dirty||(this._dirty=!0,Tt(this))})),this.effect.computed=this,this.effect.active=this._cacheable=!s,this.__v_isReadonly=n}get value(){const t=zt(this);return Nt(t),!t._dirty&&t._cacheable||(t._dirty=!1,t._value=t.effect.run()),t._value}set value(t){this._setter(t)}}const Jt=Promise.resolve(),Qt=[];let Ut=!1;const Xt=()=>{for(let t=0;t<Qt.length;t++)Qt[t]();Qt.length=0,Ut=!1};class Zt{constructor(t){let e;this.dep=void 0,this._dirty=!0,this.__v_isRef=!0,this.__v_isReadonly=!0;let n=!1,s=!1;this.effect=new E(t,(t=>{if(this.dep){if(t)e=this._value,n=!0;else if(!s){const t=n?e:this._value;s=!0,n=!1,Qt.push((()=>{this.effect.active&&this._get()!==t&&Tt(this),s=!1})),Ut||(Ut=!0,Jt.then(Xt))}for(const t of this.dep)t.computed instanceof Zt&&t.scheduler(!0)}this._dirty=!0})),this.effect.computed=this}_get(){return this._dirty?(this._dirty=!1,this._value=this.effect.run()):this._value}get value(){return Nt(this),zt(this)._get()}}return t.EffectScope=v,t.ITERATE_KEY=O,t.ReactiveEffect=E,t.computed=function(t,e,s=!1){let i,r;const c=u(t);return c?(i=t,r=n):(i=t.get,r=t.set),new Ht(i,r,c||!r,s)},t.customRef=function(t){return new qt(t)},t.deferredComputed=function(t){return new Zt(t)},t.effect=function(t,e){t.effect&&(t=t.effect.fn);const n=new E(t);e&&(s(n,e),e.scope&&g(n,e.scope)),e&&e.lazy||n.run();const i=n.run.bind(n);return i.effect=n,i},t.effectScope=function(t){return new v(t)},t.enableTracking=function(){M.push(P),P=!0},t.getCurrentScope=function(){return p},t.isProxy=function(t){return Pt(t)||Mt(t)},t.isReactive=Pt,t.isReadonly=Mt,t.isRef=Ct,t.isShallow=Vt,t.markRaw=function(t){return((t,e,n)=>{Object.defineProperty(t,e,{configurable:!0,enumerable:!1,value:n})})(t,"__v_skip",!0),t},t.onScopeDispose=function(t){p&&p.cleanups.push(t)},t.pauseTracking=V,t.proxyRefs=function(t){return Pt(t)?t:new Proxy(t,Yt)},t.reactive=jt,t.readonly=Et,t.ref=It,t.resetTracking=z,t.shallowReactive=function(t){return xt(t,!1,X,yt,mt)},t.shallowReadonly=function(t){return xt(t,!0,Z,Rt,kt)},t.shallowRef=function(t){return Kt(t,!0)},t.stop=function(t){t.effect.stop()},t.toRaw=zt,t.toRef=function(t,e,n){return Ct(t)?t:u(t)?new Ft(t):h(t)&&arguments.length>1?Gt(t,e,n):It(t)},t.toRefs=function(t){const e=c(t)?new Array(t.length):{};for(const n in t)e[n]=Gt(t,n);return e},t.toValue=function(t){return u(t)?t():Lt(t)},t.track=W,t.trigger=N,t.triggerRef=function(t){Tt(t)},t.unref=Lt,t}({});