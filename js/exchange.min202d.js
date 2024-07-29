!function(){let e=UI.func;var t="ontouchstart"in window||window.DocumentTouch&&document instanceof DocumentTouch?"touchstart":"mousedown";let o={from:{amount:void 0,label:void 0,name:void 0,logo_t:void 0,logo_a:void 0,rate:void 0,info:void 0,maxmin:void 0,error:void 0,reverse:void 0,selector:void 0},to:{amount:void 0,label:void 0,name:void 0,logo_t:void 0,logo_a:void 0,rate:void 0,info:void 0,maxmin:void 0,error:void 0,reverse:void 0,selector:void 0},address:{field:void 0,label:void 0,hidden:void 0,error:void 0,func:{favorite:void 0,paste:void 0,scanqr:void 0,clean:void 0},addressbook:void 0,addressbook_scroll:void 0},tag:{wrapper:void 0,field:void 0,label:void 0,error:void 0,func:{paste:void 0,clean:void 0}},type:{radioui:void 0,fixed:void 0,float:void 0},container:void 0,btn_exchange:void 0,btn_reverse:void 0,rate_usd_from:void 0,btn_exchange_ui:void 0},r={search_ph:"Type a currency",search_found:"Found currencies",selector_option:'<span class="coin-img svgcoin {1}"></span>',selector_label:'<span class="coin-img svgcoin {value}"></span><span class="coin-name">{coin}<sup>{sub}</sup></span>',address_ph:"Your {1} address",invoice_ph:"Your {1} address",favaddress_ph:"Find your {1} address in the list",address_error:"Enter your {1} address",invoice_error:"Enter your {1} invoice",address_invalid:"Invalid address",route_invalid:"Invalid route, unable to find a path to destination",limit_min:"Minimum amount {1}",limit_max:"You exceeded the limit of {1}",minmax:'<button type="button" class="maxmin-value" data-value="{min}"><span class="prefix">min:</span><span>{min} {coin}</span></button><button type="button" class="maxmin-value" data-value="{max}"><span class="prefix">max:</span><span>{max} {coin}</span></button>',maintenance:"Network temporarily suspended for maintenance",ccy_offline:"The network is offline",ccy_reserve:"The currency is awaiting the addition of reserves",qrcode_error:"Camera not found",addressbook_row:'<span>{address}</span><button type="button" class="ico star {#favorite}favorite{\\favorite}"></button>',addressbook_fav:"Favorite addresses",addressbook_last:"Last used addresses",recoverytime:"Estimated network recovery time",recoverytime_hour:"Estimated recovery time within an hour",recoverytime_hours:"Estimated recovery time is within {1} hours",recoverytime_day:"Estimated recovery time during the day",recoverytime_days:"Estimated recovery time is within {1} days",webln_popup_gen:"It is possible to generate an invoice using your Lightning Wallet. Want to create a new invoice to receive funds for your Lightning Wallet?",webln_popup_failed:"Failed to generate invoice",webln_popup_switch:"Your wallet cannot generate invoice without specifying the amount. Switch to fixed order type?",webln_popup_gen_ok:"Generate",webln_popup_cancel:"No thanks",webln_popup_switch_ok:"Switch",clipboard_permission:"You need to give the browser permission to use your clipboard",popup_warning_fee:"",popup_forbidden_usa:'<div class="popup-content fix-width2"><h3 style="margin-bottom: 1.3em;">Important Notice</h3><p style="text-align: center;margin-bottom: 0.2em;">U.S. persons cannot make an exchange on FixedFloat.com</p><div class="popup-ctrl"><span class="btn submit popup-close-btn bghl">I understand</span></div></div>'},a={setAmount:-1,keyupAmount:-1,keyupWallet:-1,errorInterval:-1,overflowAnimation:-1,closeAnimation:-1,stop:function(e){clearTimeout(a[e]),a[e]=-1}},s={validateSubmit:function(){for(var e in n.error)n.error[e]},toggleLocked:function(){"float"==n.type?(n.direction="from",o.to.amount.setAttribute("readonly","readonly")):n.lockType||o.to.amount.removeAttribute("readonly"),e.togClass(o.from.amount.parentNode,"locked","from"==n.direction),e.togClass(o.to.amount.parentNode,"locked","to"==n.direction)},toggleExtra:function(){var t=o.to.selector.val();o.to.selector.options[t].network,t=o.to.selector.options[t].tag;e.togClass(o.tag.wrapper,"active",!!t),e.togClass(o.address.field,"with-extra",!!t),t?(o.tag.label&&(o.tag.label.innerHTML=t+" (optional)"),o.tag.field&&o.tag.field.setAttribute("placeholder",t),clearTimeout(a.overflowAnimation),a.overflowAnimation=setTimeout((function(){e.addClass(o.tag.wrapper,"ovisible"),a.overflowAnimation=-1}),300)):e.remClass(o.tag.wrapper,"ovisible")},positionUsdRate:function(){var e=o.from.selector.val(),t=o.to.selector.val();"BTC"==e&&"BTCLN"!=t||"BTCLN"==e?o.container.setAttribute("data-pos-usd","bottom"):o.container.setAttribute("data-pos-usd","top")},resizeTextarea:function(){if(o.address.field&&"TEXTAREA"==o.address.field.tagName.toUpperCase()){let l=o.address.field;l.style.height="0";let c=getComputedStyle(l,null);var t=parseFloat(c.getPropertyValue("padding-top")),r=parseFloat(c.getPropertyValue("padding-bottom")),a=parseFloat(c.getPropertyValue("border-top-width")),s=parseFloat(c.getPropertyValue("border-bottom-width")),d=(parseFloat(c.getPropertyValue("font-size")),parseFloat(c.getPropertyValue("line-height"))),i=l.scrollHeight,n=e.hasClass(l,"multi");if(Math.ceil(d+t+r)>=i){if(n)return e.remClass(l,"multi"),void this.resizeTextarea()}else if(!n)return e.addClass(l,"multi"),void this.resizeTextarea();o.address.field.style.height=i+s+a+1+"px"}}},d={allow:!0,makeInvoice:async function(e){return(await WebLN.requestProvider()).makeInvoice(e)},getInvoice:function(){let e={defaultMemo:"From FixedFloat"};"fixed"==n.type&&(e.amount=~~(1e8*+n.to.amount)),a.keyupWallet=1,o.address.field.blur(),d.makeInvoice(e).then((function(t){t=t.paymentRequest,d.allow=!0,t||e.amount?(a.keyupWallet=1,n.pasteAddress(t),a.keyupWallet=-1):d.confirmSwitchFixed()})).catch((function(e){d.allow=!0,a.keyupWallet=-1,"Zero-amount invoice is not supported."==e?d.confirmSwitchFixed():(UI.alert(r.webln_popup_failed),console.log(e))}))},confirmGenerate:function(t){UI.popup({html:'<div class="popup-content popup-confirm fix-width"><p>'+r.webln_popup_gen+'</p><div class="popup-ctrl"><button type="button" class="btn cancel">'+r.webln_popup_cancel+'</button><button type="button" class="btn submit popup-close-btn">'+r.webln_popup_gen_ok+"</button></div></div>",afterRender:function(){var t=this;e.on(t.container,"click",".cancel",(function(){d.allow=!1,setTimeout((function(){d.allow=!0}),5e3),o.address.field&&o.address.field.focus(),t.close()})),e.on(t.container,"click",".submit",(function(){d.allow=!1,d.getInvoice()}))}}).show()},confirmSwitchFixed:function(){var e={ok:r.webln_popup_switch_ok,cancel:r.webln_popup_cancel};UI.confirm(r.webln_popup_switch,(function(){n.type="fixed",o.type.radioui&&o.type.radioui.val("fixed"),s.toggleLocked(),n.getRatePaste()}),e)}};var i=function(t,o){var r=o.which||o.keyCode;o.ctrlKey||o.altKey||o.metaKey||(48!=r&&96!=r||"0"!=t.value||(t.value="0."),58<=r&&r<=90||106<=r&&r<=111||146<=r?(o.preventDefault(),188!=r&&190!=r&&191!=r&&110!=r||-1!=t.value.search(/\./i)||(o=e.carPos(t),t.value=t.value.substr(0,o)+"."+t.value.substr(o++),e.setCarPos(t,o,o))):13==r&&t.blur())};let n={isInit:!1,from:{ccy:"",amount:0,req:void 0},to:{ccy:"",amount:0,req:void 0},usd:{from:0,to:0},type:"float",direction:"from",lockType:!1,lockAmount:!1,lockSend:!1,lockReceive:!1,lockAddress:!1,errorIgnore:!1,floatLNInvoice:!0,address:{value:"",extra:"",fixedAmount:!1,findfavorite:!1},error:{from:!1,to:!1,address:!0,extra:!1},wisthExtra:["BNB","XRP","XLM"],checkAddressInProgress:!1,priceAbortController:void 0,priceAbortLoading:void 0,priceApiPromise:void 0,select:function(t,a){var s=a.value;o[t].amount.parentNode.parentNode.setAttribute("data-value",s),o[t].name.innerHTML=a.label,o[t].label.innerHTML=e.fmt(r.selector_label,a),o[t].label.setAttribute("data-count",s.length),o[t].reverse.setAttribute("data-value",s),o[t].logo_t.setAttribute("data-value",s),o[t].logo_a.setAttribute("data-value",s),1==+a.inactive?(e.addClass(o[t].amount.parentNode,"error"),e.addClass(o[t].amount.parentNode,"offline")):(e.remClass(o[t].amount.parentNode,"error"),e.remClass(o[t].amount.parentNode,"offline")),n[t].ccy=s,APP.highlightingColor(n.from.ccy,n.to.ccy)},unlockAmounts:function(){n.lockType||(n.address.fixedAmount=!1,o.type.float.disabled=!1,n.lockAmount&&n.lockSend||(o.from.amount.disabled=!1),"float"!=n.type&&(o.to.amount.disabled=!1))},checkType:function(e){e?(o.to.amount.value=e,n.type="fixed",o.type.radioui&&o.type.radioui.val("fixed"),n.direction="to",s.toggleLocked(),o.type.float.disabled=!0,o.to.amount.disabled=!0,o.from.amount.disabled=!0,n.address.fixedAmount=!0,n.getRatePaste()):n.unlockAmounts()},pasteAddress:function(t,r){o.address.field?(o.address.field.value=t,r?(o.address.field.focus(),s.resizeTextarea(t),o.address.field.blur()):(e.remClass(o.address.field,"error"),n.validateAddress(),s.resizeTextarea(t))):n.address.value=t},getAddressBook:function(t){APP.api("userAddressBook",t).then((function(t){e.remClass(o.address.addressbook,"loading"),n.pasteAddressBook(t.data)})).catch((function(t){e.remClass(o.address.addressbook,"loading")}))},pasteAddressBook:function(t){function a(t){let o=document.createElement("div");return e.addClass(o,"row-address"),o.setAttribute("data-addr",t.address),o.setAttribute("data-tag",t.tag),o.setAttribute("data-coin",t.coin),o.setAttribute("data-network",t.network),o.innerHTML=e.fmt(r.addressbook_row,t),o}function s(t){let o=document.createElement("div");return e.addClass(o,"row-separate"),o.innerHTML="<span>"+t+"</span>",o}for(let e=t.fav.length-1;0<=e;e--)for(var d in t.last){if(void 0===t.fav[e])break;t.fav[e].address==t.last[d].address&&t.fav[e].tag==t.last[d].tag&&t.fav.splice(e,1)}for(var i in o.address.addressbook.innerHTML="",t.last.length&&o.address.addressbook.appendChild(s(r.addressbook_last)),t.last)o.address.addressbook.appendChild(a(t.last[i]));for(var n in t.fav.length&&o.address.addressbook.appendChild(s(r.addressbook_fav)),t.fav)o.address.addressbook.appendChild(a(t.fav[n]));o.address.addressbook_scroll.update()},closeAddressBook:function(t,s){n.address.findfavorite=!1,o.address.addressbook.innerHTML="",e.remClass(o.address.field.parentNode.parentNode,"show-address-book"),clearTimeout(a.closeAnimation),a.closeAnimation=setTimeout((function(){e.remClass(o.tag.wrapper,"noanim")}),300),o.address.field.setAttribute("placeholder",e.fmt(r.address_ph,o.to.selector.selectedAttr("label"))),s&&(o.tag.field.value=s),t?n.pasteAddress(t):n.pasteAddress("",!1)},checkAddress:function(){var t;n.address.value&&(t={currency:o.to.selector.val(),address:n.address.value,tag:n.address.extra},APP.api("exchCheckAddress",t).then((function(t){o.address.error&&(o.address.error.innerHTML=""),o.address.field&&e.remClass(o.address.field,"error"),o.tag.field&&e.remClass(o.tag.field,"error"),n.checkType(t.data.amount),n.error.address=!1,n.checkAddressInProgress=!1,s.validateSubmit()})).catch((function(t){switch(n.checkAddressInProgress=!1,t.code){case 302:case 303:o.tag.field&&e.addClass(o.tag.field,"error"),o.tag.field&&(o.tag.error.innerHTML=t.msg);break;default:o.address.field?e.addClass(o.address.field,"error"):UI.alert(t.msg),o.address.error&&(o.address.error.innerHTML=t.msg)}s.validateSubmit()})))},validateAddress:function(){!o.address.field||n.address.value==o.address.field.value&&n.address.extra==o.tag.field.value||(o.address.field&&(n.address.value=o.address.field.value),o.tag.field&&(n.address.extra=o.tag.field.value),n.address.value?-1==a.keyupWallet&&n.checkAddress():(n.error.address=!0,n.unlockAmounts(),s.validateSubmit()))},validateExtra:function(){o.tag.field&&(n.address.extra=o.tag.field.value);let t=n.address.extra;if(t)switch(n.to.ccy){case"XRP":(9<t.toString().length||isNaN(t))&&(n.error.extra=!0);break;case"BNB":100<t.toString().length&&(n.error.extra=!0);break;default:n.error.extra=!1}else n.error.extra=!1;o.tag.field?e.togClass(o.tag.field,"error",n.error.extra):n.error.extra&&UI.alert(r.address_invalid),s.validateSubmit()},avaliblesCurrencies:function(e){let t={};for(var r in e)t[e[r].code]=e[r];for(var a in o.from.selector.options)o.from.selector.attr(a,"inactive",+!t[a].recv);for(var s in o.to.selector.options)o.to.selector.attr(s,"inactive",+!t[s].send)},getRateQuery:function(t,d,i,l,c){clearInterval(a.errorInterval);let u={type:n.type,fromCcy:t.toUpperCase(),toCcy:d.toUpperCase()};"string"==typeof i&&(i=i.match(/[\d\.]+/g)[0]),"to"==l?u.toAmount=i:u.fromAmount=i,!0===c?u.usd=n.usd.from:+c&&(u.usd=+c),n.priceApiPromise&&n.priceApiPromise.isPending()&&n.priceAbortController&&n.priceAbortController instanceof AbortController&&(n.priceAbortController.abort(),n.priceAbortLoading=!0),n.priceAbortController=new AbortController,n.priceApiPromise=APP.api("exchPrice",u,(function(t){n.priceAbortLoading=!1;let a=t.data;var d,i,u="fixed"==n.type?"=":"≈";t="fixed"==n.type?"":"≈";if(e.remClass(o.to.amount.parentNode,"error"),e.remClass(o.from.amount.parentNode,"error"),e.remClass(o.to.amount.parentNode,"offline"),e.remClass(o.from.amount.parentNode,"offline"),a){if(a.to.max=e.fixNumber(a.to.max,8),n.error.from=!1,n.error.to=!1,a.errors.length){if(a.errors.includes("MAINTENANCE_FROM")){let t="";a.from.recoverytime&&(i=moment.unix(a.from.recoverytime),d=moment().diff(i,"hours"),t=1<(i=moment().diff(i,"days"))?"<br> "+e.fmt(r.recoverytime_days,i):1==i?"<br> "+e.fmt(r.recoverytime_day):1<d?"<br> "+e.fmt(r.recoverytime_hours,d):"<br> "+e.fmt(r.recoverytime_hour)),o.from.error.innerHTML=r.maintenance+t,n.error.from="OFFLINE"}else a.errors.includes("OFFLINE_FROM")?(o.from.error.innerHTML=r.ccy_offline,n.error.from="OFFLINE"):a.errors.includes("RESERVE_FROM")&&(o.from.error.innerHTML=r.ccy_reserve,n.error.from="OFFLINE");if(a.errors.includes("MAINTENANCE_TO")){let t="";a.to.recoverytime&&(i=moment.unix(a.to.recoverytime),d=moment().diff(i,"hours"),t=1<(i=moment().diff(i,"days"))?"<br> "+e.fmt(r.recoverytime_days,i):1==i?"<br> "+e.fmt(r.recoverytime_day):1<d?"<br> "+e.fmt(r.recoverytime_hours,d):"<br> "+e.fmt(r.recoverytime_hour)),o.to.error.innerHTML=r.maintenance+t,n.error.to="OFFLINE"}else a.errors.includes("OFFLINE_TO")?(o.to.error.innerHTML=r.ccy_offline,n.error.to="OFFLINE"):a.errors.includes("RESERVE_TO")&&(o.to.error.innerHTML=r.ccy_reserve,n.error.to="OFFLINE");"OFFLINE"!=n.error.from&&"OFFLINE"!=n.error.to&&(a.errors.includes("LIMIT_MIN")?(o[l].error.innerHTML=e.fmt(r.limit_min,'<button type="button" class="maxmin-value" data-value="'+a[l].min+'">'+a[l].min+" "+a[l].coin+"</button>"),n.error[l]=!0):a.errors.includes("LIMIT_MAX")&&(o[l].error.innerHTML=e.fmt(r.limit_max,'<button type="button" class="maxmin-value" data-value="'+a[l].max+'">'+a[l].max+" "+a[l].coin+"</button>"),n.error[l]=!0)),n.error.from&&(e.addClass(o.from.amount.parentNode,"error"),e.togClass(o.from.amount.parentNode,"offline","OFFLINE"==n.error.from)),n.error.to&&(e.addClass(o.to.amount.parentNode,"error"),e.togClass(o.to.amount.parentNode,"offline","OFFLINE"==n.error.to))}s.validateSubmit(),c?(o.from.amount.value=a.from.amount,o.to.amount.value=t+a.to.amount):"to"==l?(o.from.amount.value=a.from.amount,o.to.amount.value=t+e.fixNumber(a.to.amount)):(document.activeElement!=o.from.amount&&(o.from.amount.value=e.fixNumber(a.from.amount)),o.to.amount.value=t+a.to.amount),n.from.amount=e.fixNumber(a.from.amount),n.to.amount=e.fixNumber(a.to.amount),n.usd.from=a.from.usd,n.usd.to=a.to.usd,o.from.rate.innerHTML="1 "+a.from.coin+" "+u+" "+a.from.rate+" "+a.to.coin,o.from.maxmin.innerHTML=e.fmt(r.minmax,a.from),o.to.rate.innerHTML="1 "+a.to.coin+" "+u+" "+a.to.rate+" "+a.from.coin,o.to.maxmin.innerHTML=e.fmt(r.minmax,a.to),o.rate_usd_from.innerHTML="$ "+e.round(a.from.usd,2),o.rate_usd_to.innerHTML="$ "+e.round(a.to.usd,2),s.toggleLocked(),a.ccies&&n.avaliblesCurrencies(a.ccies)}else"to"==l?e.addClass(o.to.amount.parentNode,"error"):e.addClass(o.from.amount.parentNode,"error")}),(function(){a.errorInterval=setInterval((function(){n.getRateFull(i,l)}),1e4)}),n.priceAbortController)},getRate:function(e,t,r){n.getRateQuery(o.from.selector.val(),o.to.selector.val(),e,t,r)},getRateFull:function(t,a,s){this.getRate(t,a,s),o.address.field&&(s="btcln"==o.to.selector.val()?r.invoice_ph:r.address_ph,o.address.field.setAttribute("placeholder",e.fmt(s,o.to.selector.selectedAttr("label"))))},getRatePaste:function(e){var t,r;n.isInit&&(t=e?!n.lockReceive:void 0,r=("to"==n.direction?o.to:o.from).amount.value,e?n.getRateFull(r,n.direction,t):n.getRate(r,n.direction,t))},createOrder:function(t,a){return APP.api("exchCreate",t,(function(e){a&&a.success(),location.href="/order/"+e.data}),(function(t){a&&a.error(),301==t.code?(o.address.field?(o.address.error&&(o.address.error.innerHTML=e.fmt(r.address_error,o.to.selector.selectedAttr("label"))),o.address.field.focus()):UI.alert(r.address_invalid),e.addClass(o.address.field,"error")):300==t.code?UI.alert("Error! Try reloading the page"):502==t.code&&UI.popup({html:r.popup_forbidden_usa}).show()}))},init:function(l){o.container=e.id("exchange_amount"),o.type.radioui=UI.radio("select_type_from"),o.btn_exchange=e.id("exchange_submit"),o.btn_reverse=e.id("btn_reverse"),o.rate_usd_from=e.id("rate_usd_from"),o.rate_usd_to=e.id("rate_usd_to"),o.from.amount=e.id("select_amount_from"),o.from.name=e.id("select_ccyname_from"),o.from.label=e.id("select_label_from"),o.from.reverse=e.id("btn_reverse_from"),o.from.logo_t=e.id("logo_text_from"),o.from.logo_a=e.id("logo_arrow_from"),o.from.error=e.id("select_hinterror_from"),o.from.rate=e.id("select_rate_from"),o.from.maxmin=e.id("select_maxmin_from"),o.from.info=e.id("select_info_from"),o.to.amount=e.id("select_amount_to"),o.to.name=e.id("select_ccyname_to"),o.to.label=e.id("select_label_to"),o.to.reverse=e.id("btn_reverse_to"),o.to.logo_t=e.id("logo_text_to"),o.to.logo_a=e.id("logo_arrow_to"),o.to.error=e.id("select_hinterror_to"),o.to.rate=e.id("select_rate_to"),o.to.maxmin=e.id("select_maxmin_to"),o.to.info=e.id("select_info_to"),o.address.field=e.id("receive_wallet"),o.address.label=e.id("receive_wallet_label"),o.address.error=e.id("receive_wallet_error"),o.address.hidden=e.id("receive_wallet_hidden"),o.address.func.paste=e.id("wallet_paste"),o.address.func.scanqr=e.id("wallet_scanqr"),o.address.func.favorite=e.id("wallet_favorite"),o.address.func.clean=e.id("wallet_clear"),o.address.addressbook=e.id("wallet_addressbook"),o.tag.field=e.id("receive_extraid"),o.tag.label=e.id("receive_extraid_label"),o.tag.wrapper=e.id("wallet_extra_outer"),o.tag.error=e.id("receive_extraid_error"),o.tag.func.paste=e.id("extraid_paste"),o.tag.func.clean=e.id("extraid_clear"),o.type.fixed=e.id("fixed_type"),o.type.float=e.id("float_type"),n.from.req=l.fromAmount||n.from.req,n.to.req=l.toAmount||n.to.req,n.lockAmount=(void 0!==l.lockAmount?l:n).lockAmount,n.lockType=(void 0!==l.lockType?l:n).lockType,n.lockSend=(void 0!==l.lockSend?l:n).lockSend,n.lockReceive=(void 0!==l.lockReceive?l:n).lockReceive,n.lockAddress=(void 0!==l.lockAddress?l:n).lockAddress,n.errorIgnore=(void 0!==l.errorIgnore?l:n).errorIgnore,n.floatLNInvoice=(void 0!==l.floatLNInvoice?l:n).floatLNInvoice,r.selector_option=l.selector_tmpl||r.selector_option,r.selector_label=l.label_tmpl||r.selector_label,r.search_ph=l.search_ph||r.search_ph,r.search_found=l.search_found||r.search_found,r.address_ph=l.address_ph||r.address_ph,r.invoice_ph=l.invoice_ph||r.invoice_ph,r.favaddress_ph=l.favaddress_ph||r.favaddress_ph,r.address_invalid=l.address_invalid||r.address_invalid,r.route_invalid=l.route_invalid||r.route_invalid,r.address_error=l.address_error||r.address_error,r.invoice_error=l.invoice_error||r.invoice_error,r.limit_min=l.limit_min||r.limit_min,r.limit_max=l.limit_max||r.limit_max,r.addressbook_row=l.address_tmpl||r.address_tmpl,r.addressbook_fav=l.addressbook_fav||r.addressbook_fav,r.addressbook_last=l.addressbook_last||r.addressbook_last,r.maintenance=l.maintenance||r.maintenance,r.ccy_offline=l.ccy_offline||r.ccy_offline,r.ccy_reserve=l.ccy_reserve||r.ccy_reserve,r.qrcode_error=l.qrcode_error||r.qrcode_error,r.recoverytime=l.recoverytime||r.recoverytime,r.recoverytime_hour=l.recoverytime_hour||r.recoverytime_hour,r.recoverytime_hours=l.recoverytime_hours||r.recoverytime_hours,r.recoverytime_day=l.recoverytime_day||r.recoverytime_day,r.recoverytime_days=l.recoverytime_days||r.recoverytime_days,r.clipboard_permission=l.clipboard_permission||r.clipboard_permission,r.popup_warning_fee=l.popup_warning_fee||r.popup_warning_fee,r.popup_forbidden_usa=l.popup_forbidden_usa||r.popup_forbidden_usa,o.type.radioui?n.type=o.type.radioui.val():l.type&&(n.type=l.type),o.from.selector=UI.selector("select_currency_from",{tmpl:r.selector_option,dataToAttr:["inactive"],search:{placeholder:r.search_ph,label:r.search_found},hidden:!0,onOpen:function(){e.addClass(document.body,"select-priority")},onClose:function(){e.remClass(document.body,"select-priority")},onInit:function(e){n.select("from",e)}}),o.to.selector=UI.selector("select_currency_to",{tmpl:r.selector_option,dataToAttr:["inactive"],search:{placeholder:r.search_ph,label:r.search_found},hidden:!0,onOpen:function(){e.addClass(document.body,"select-priority")},onClose:function(){e.remClass(document.body,"select-priority")},onInit:function(e){n.select("to",e)}}),o.from.selector.onChange((function(t,r,a){e.remClass(o.address.field,"error"),s.positionUsdRate(),n.select("from",t),o.to.selector.val()!=t.value||a||(o.to.selector.select(r.value,!0),n.unlockAmounts(),n.pasteAddress("",!1)),n.address.fixedAmount&&(n.unlockAmounts(),n.pasteAddress("",!1)),a||n.getRatePaste(!0),e.localStorage.set("ff.exch.from",t.value)})),o.to.selector.onChange((function(t,r,a){e.remClass(o.address.field,"error"),n.to.ccy!=t.value&&(n.unlockAmounts(),n.address.findfavorite&&n.closeAddressBook(),n.pasteAddress("",!1),o.tag.field&&(o.tag.field.value="",e.remClass(o.tag.field,"error"))),s.toggleExtra(),s.positionUsdRate(),n.select("to",t),o.from.selector.val()!=t.value||a||(o.from.selector.select(r.value,!0),n.unlockAmounts(),n.pasteAddress("",!1),o.tag.field&&(o.tag.field.value="",e.remClass(o.tag.field,"error"))),"BTCLN"!=t.value||n.floatLNInvoice?n.lockType||(o.type.float.disabled=!1):(n.type="fixed",o.type.radioui&&o.type.radioui.val("fixed"),s.toggleLocked(),o.type.float.disabled=!0),e.togClass(o.address.func.favorite,"none","BTCLN"==t.value),a||n.getRatePaste(!0),e.localStorage.set("ff.exch.to",t.value)})),o.type.radioui&&o.type.radioui.change((function(){let e=!1;n.type!=this.value&&(n.type=this.value,e=!0),s.toggleLocked(),e&&n.getRatePaste()})),o.address.addressbook&&(o.address.addressbook_scroll=UI.scroller(o.address.addressbook,{scroll:"y",addParent:!1,classScrollWrapY:"ui-select-scroll-wrap",classScrollBarY:"ui-select-scroll",addClasses:!1})),o.btn_reverse.onclick=function(t){var r;(t=t||event).preventDefault(),e.hasClass(this,"disabled")||(r=o.from.selector.val(),t=o.to.selector.val(),o.to.selector.options[r]&&o.from.selector.options[t]&&(o.to.selector.val(r),n.pasteAddress("",!1)))},o.from.amount.onfocus=function(){e.remClass(o.address.field,"error")},o.from.amount.onkeydown=function(e){e=e||event,i(this,e)},o.to.amount.onfocus=function(){e.remClass(o.address.field,"error")},o.to.amount.onkeydown=function(e){e=e||event,i(this,e)},o.to.amount.onblur=function(){!function(e,t){var r;clearTimeout(a.keyupAmount),-1!=a.setAmount||n.lockAmount||(e.value?(r="to"==t?"to":n.direction,n.getRate(e.value,r)):(e.value="0.0000",o[t].error.innerHTML="The amount can not be zero"))}(this,"to")},e.bind(o.address.field,"keydown",(function(e){13==((e=e||event).which||e.keyCode)&&(e.preventDefault(),n.address.value=this.value,o.btn_exchange_ui.click())})),e.bind(o.address.field,"focus",(function(){e.remClass(this,"error")})),e.bind(o.address.field,"click",(function(){if(WebLN&&d.allow&&"btcln"==n.to.ccy&&""==o.address.field.value)try{WebLN.requestProvider().then((function(){o.address.field.blur(),d.confirmGenerate()})).catch((function(e){}))}catch(e){console.log(e)}})),e.bind(o.address.field,"input",(function(){n.checkAddressInProgress=!0,e.remClass(this,"error"),e.remClass(o.tag.field,"error"),clearTimeout(a.keyupWallet);var t=this.value;s.resizeTextarea(t),n.address.findfavorite?a.keyupWallet=setTimeout((function(){a.keyupWallet=-1;var e=o.to.selector.options[o.to.selector.val()];let r={coin:e.coin,network:e.network};t&&(r.address=t),n.getAddressBook(r)}),1e3):t?a.keyupWallet=setTimeout((function(){a.keyupWallet=-1,n.validateAddress()}),1e3):(n.error.address=!0,n.unlockAmounts(),s.validateSubmit(),n.checkAddressInProgress=!1)})),e.bind(o.address.field,"blur",(function(){n.address.findfavorite||n.validateAddress()})),e.bind(o.tag.field,"input",(function(){e.remClass(this,"error"),e.remClass(o.address.field,"error"),o.address.field.value&&(n.checkAddressInProgress=!0,clearTimeout(a.keyupWallet),a.keyupWallet=setTimeout((function(){a.keyupWallet=-1,n.validateAddress()}),1e3))})),e.bind(o.from.label,"click",(function(){o.from.selector.open()})),e.bind(o.to.label,"click",(function(){o.to.selector.open()})),e.bind(o.address.func.favorite,"click",(function(t){n.address.findfavorite=!0,e.addClass(o.address.field.parentNode.parentNode,"show-address-book"),e.addClass(o.tag.wrapper,"noanim"),e.addClass(o.address.addressbook,"loading"),e.remClass(o.address.field,"error"),o.address.field.setAttribute("placeholder",e.fmt(r.favaddress_ph,o.to.selector.selectedAttr("label")));var a={coin:(a=o.to.selector.options[o.to.selector.val()]).coin,network:a.network};n.getAddressBook(a)})),e.on(o.address.addressbook,"click",".row-address",(function(t){var o=t.target.closest(".addressbook-favorite");if(o){let t=o.parentNode;var r=e.hasClass(o,"active");e.togClass(o,"active",!r);var a={coin:t.getAttribute("data-coin"),network:t.getAttribute("data-network"),address:t.getAttribute("data-addr"),tag:t.getAttribute("data-tag"),favorite:!r};APP.api("userAddressFavorite",a).then((function(e){console.log(e)})).catch((function(t){e.togClass(o,"active",!!r)}))}else t=this.getAttribute("data-addr"),a=this.getAttribute("data-tag"),n.closeAddressBook(t,a)})),navigator.clipboard&&(e.remClass(o.address.func.paste,"none"),e.remClass(o.tag.func.paste,"none"),e.bind(o.address.func.paste,"click",(function(e){a.stop("keyupWallet"),navigator.clipboard.readText().then((function(e){n.pasteAddress(e)})).catch((function(e){UI.alert(r.clipboard_permission)}))})),e.bind(o.tag.func.paste,"click",(function(e){a.stop("keyupWallet"),navigator.clipboard.readText().then((function(e){o.tag.field.value=val,n.validateAddress()})).catch((function(e){UI.alert(r.clipboard_permission)}))}))),e.bind(o.address.func.scanqr,"click",(function(e){(e=e||event).preventDefault(),UI.qrscan({scan:function(e){e=e.match(/(?:\w+:)?(\w+)(?:\?.*)?/i),n.pasteAddress(e[1]),this.close()},error:function(){}})})),e.bind(o.address.func.clean,t,(function(){clearTimeout(a.keyupWallet),a.keyupWallet=setTimeout((function(){a.keyupWallet=-1}),100)})),e.bind(o.tag.func.clean,t,(function(){clearTimeout(a.keyupWallet),a.keyupWallet=setTimeout((function(){a.keyupWallet=-1}),100)})),e.bind(o.address.func.clean,"click",(function(t){(t=t||event).preventDefault(),a.stop("keyupWallet"),n.address.findfavorite?n.closeAddressBook():(n.pasteAddress("",!1),o.tag.field.value="",e.remClass(o.tag.field,"error"))})),e.bind(o.tag.func.clean,"click",(function(t){(t=t||event).preventDefault(),a.stop("keyupWallet"),o.tag.field.value="",e.remClass(o.tag.field,"error"),n.validateAddress()})),e.on(o.container,"click",".tolightning",(function(e){var t=this.getAttribute("data-dir");"from"==t?o.from.selector.select("btcln"):"to"==t&&o.to.selector.select("btcln")})),e.on(o.container,"mousedown",".maxmin-value",(function(e){if(0==(e=e||event).button){e.preventDefault();let t=this.closest(".input-wabbr").querySelector("input.input-amount"),o=t.getAttribute("data-dir"),r=this.getAttribute("data-value");if(!n.lockAmount)return"float"==n.type&&"to"==o||(t.value=r),s.toggleLocked(),a.setAmount=setTimeout((function(){a.setAmount=-1}),300),n.getRate(r,o),!1}})),e.bind(document.body,"click",(function(e){n.address.findfavorite&&!e.target.closest(".show-address-book > .field")&&n.closeAddressBook()})),o.btn_exchange_ui=UI.button(o.btn_exchange,{changeAtOnce:!1,changeTexts:!1}).click((function(t,s){for(var d in s.preventDefault(),n.error)if(n.error[d]){let t=!0;switch(d){case"from":o.from.amount.focus();break;case"to":o.to.amount.focus();break;default:-1!=a.keyupWallet||n.checkAddressInProgress?t=!1:(o.address.field?(o.address.error&&(o.address.error.innerHTML=e.fmt(r.address_error,o.to.selector.selectedAttr("label"))),o.address.field.focus()):UI.alert(r.address_invalid),e.addClass(o.address.field,"error"))}if(t&&!n.errorIgnore)return}let i={fromCcy:n.from.ccy.toUpperCase(),toCcy:n.to.ccy.toUpperCase(),type:n.type,toAddress:n.address.value};"to"==n.direction?i.toQty=n.to.amount:i.fromQty=n.from.amount,o.to.selector.options[i.toCcy].tag&&(i.tag=o.tag.field.value),"function"==typeof gtag&&gtag("event","exchange",{event_category:"button"}),n.usd.to,n.usd.from,.07<=1-n.usd.to/n.usd.from&&2<n.usd.from-n.usd.to&&r.popup_warning_fee?UI.popup({html:r.popup_warning_fee,class:"foreground",onSubmit:function(){t.loading(),n.createOrder(i,t)}}).show():(t.loading(),n.createOrder(i,t))})),l.reqFrom||(c=e.localStorage.get("ff.exch.from"))&&o.from.selector.options[c]&&o.from.selector.select(c,!0),l.reqTo||(u=e.localStorage.get("ff.exch.to"))&&o.to.selector.options[u]&&o.to.selector.select(u),n.isInit=!0,l.address&&(n.error.address=!1),n.pasteAddress(l.address||"",!1),n.address.extra=l.extra||"",o.tag.field&&(o.tag.field.value=n.address.extra),n.lockReceive&&n.lockAmount&&(n.direction="to",n.checkType(l.toAmount));var c=l.toAmount||l.fromAmount||1e3,u=l.fromAmount?"from":"to";n.getRateFull(c,u,l.fromAmount||l.toAmount?"undefined":50),n.validateAddress(),s.toggleExtra(),s.positionUsdRate(),s.toggleLocked()}};e.bind(window,"resize",(function(){s.resizeTextarea(o.address.field.value)})),window.Exchange=n,window.ExObj=o}();