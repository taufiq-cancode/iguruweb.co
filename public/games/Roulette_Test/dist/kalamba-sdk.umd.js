var T=Object.defineProperty;var G=(e,r,s)=>r in e?T(e,r,{enumerable:!0,configurable:!0,writable:!0,value:s}):e[r]=s;var d=(e,r,s)=>(G(e,typeof r!="symbol"?r+"":r,s),s),h=(e,r,s)=>{if(!r.has(e))throw TypeError("Cannot "+s)};var E=(e,r,s)=>(h(e,r,"read from private field"),s?s.call(e):r.get(e)),g=(e,r,s)=>{if(r.has(e))throw TypeError("Cannot add the same private member more than once");r instanceof WeakSet?r.add(e):r.set(e,s)},w=(e,r,s,c)=>(h(e,r,"write to private field"),c?c.call(e,s):r.set(e,s),s);(function(e,r){typeof exports=="object"&&typeof module<"u"?r(exports):typeof define=="function"&&define.amd?define(["exports"],r):(e=typeof globalThis<"u"?globalThis:e||self,r(e.Kalamba={}))})(this,function(e){var i;"use strict";function r(u,t){return(o,...n)=>{console.log(`[%c${u}\x1B[m] %s`,t,o,...n)}}const s=!1,c=()=>{},y=s?r("\u25B2 SDK OUT \u25B2","color:#B3E510;font-weight:bold;"):()=>{};class p extends Error{constructor(o){super("OpenGameError");d(this,"error");this.name="OpenGameError",this.error=o}}class f extends Error{constructor(o){super("PlayError");d(this,"error");this.name="PlayError",this.error=o}}class m extends Error{constructor(){super("TimeoutError"),this.name="TimeoutError"}}class b{constructor({messagePort:t}){d(this,"config");g(this,i,void 0);w(this,i,t),this.on("configured",o=>{this.config=o})}request(t,...[o]){return new Promise(n=>{this.on(`${t}Response`,a=>n({type:"response",response:a}),{once:!0}),this.on(`${t}Error`,a=>n({type:"error",error:a}),{once:!0}),this.send(t,o)})}on(t,o,n){const a=function P(l){l.data.message===`kalamba:wrapper:${t}`&&(c("on",l.data.message.replace(/^kalamba:/,""),l.data.payload),o(l.data.payload),n!=null&&n.once&&window.removeEventListener("message",P))};window.addEventListener("message",a)}send(t,...[o]){y("send",t,o),E(this,i).postMessage({message:`kalamba:sdk:${t}`,payload:o},"*")}async openGame(t){var n;const[,o]=await Promise.all([new Promise(a=>this.on("configured",a,{once:!0})),this.request("openGame",t)]);if(o.type==="response")return o.response;throw((n=o.error)==null?void 0:n.type)==="timeout"?new m:new p(o.error)}async play(t){var n;const o=await this.request("play",t);if(o.type==="response")return o.response;throw((n=o.error)==null?void 0:n.type)==="timeout"?new m:new f(o.error)}}i=new WeakMap,e.KalambaSdk=b,e.OpenGameError=p,e.PlayError=f,e.TimeoutError=m,Object.defineProperties(e,{__esModule:{value:!0},[Symbol.toStringTag]:{value:"Module"}})});