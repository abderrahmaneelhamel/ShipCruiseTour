!function(e,t){"object"==typeof exports&&"object"==typeof module?module.exports=t():"function"==typeof define&&define.amd?define([],t):"object"==typeof exports?exports.CDB=t():e.CDB=t()}(self,(function(){return(()=>{var e={160:function(e,t,a){var n,i,s,r;function o(e){return o="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e},o(e)}void 0!==a.g?a.g:this.window||this.global,r=function(e){"use strict";var t=window,a=document,n=a.body,i={perPage:10,perPageSelect:[5,10,15,20,25],sortable:!0,searchable:!0,nextPrev:!0,firstLast:!1,prevText:"&lsaquo;",nextText:"&rsaquo;",firstText:"&laquo;",lastText:"&raquo;",ellipsisText:"&hellip;",ascText:"▴",descText:"▾",truncatePager:!0,pagerDelta:2,fixedColumns:!0,fixedHeight:!1,header:!0,footer:!1,labels:{placeholder:"Search...",perPage:"{select} entries per page",noRows:"No entries found",info:"Showing {start} to {end} of {rows} entries"},layout:{top:"{select}{search}",bottom:"{info}{pager}"}},s=function(e){return"[object Object]"===Object.prototype.toString.call(e)},r=function(e){return Array.isArray(e)},l=function e(t,a){for(var n in a)if(a.hasOwnProperty(n)){var i=a[n];i&&s(i)?(t[n]=t[n]||{},e(t[n],i)):t[n]=i}return t},d=function(e,t,a){var n;if(s(e))for(n in e)Object.prototype.hasOwnProperty.call(e,n)&&t.call(a,e[n],n);else for(n=0;n<e.length;n++)t.call(a,e[n],n)},c=function(e,t,a){e.addEventListener(t,a,!1)},h=function(e,t){var n,i=a.createElement(e);if(t&&"object"==o(t))for(n in t)"html"===n?i.innerHTML=t[n]:i.setAttribute(n,t[n]);return i},u=function e(t,a){if(t instanceof NodeList)d(t,(function(t){e(t,a)}));else if(a)for(;t.hasChildNodes();)t.removeChild(t.firstChild);else t.innerHTML=""},p=function(e,t,a){return h("li",{class:e,html:'<a href="#" data-page="'+t+'">'+a+"</a>"})},f={add:function(e,t){e.classList?e.classList.add(t):f.contains(e,t)||(e.className=e.className.trim()+" "+t)},remove:function(e,t){e.classList?e.classList.remove(t):f.contains(e,t)&&(e.className=e.className.replace(new RegExp("(^|\\s)"+t.split(" ").join("|")+"(\\s|$)","gi")," "))},contains:function(e,t){if(e)return e.classList?e.classList.contains(t):!!e.className&&!!e.className.match(new RegExp("(\\s|^)"+t+"(\\s|$)"))}},g=function(e,t){var a,n;1===t?(a=0,n=e.length):-1===t&&(a=e.length-1,n=-1);for(var i=!0;i;){i=!1;for(var s=a;s!=n;s+=t)if(e[s+t]&&e[s].value>e[s+t].value){var r=e[s],o=e[s+t],l=r;e[s]=o,e[s+t]=l,i=!0}}return e},b=function(e){var t=!1,a=!1;if((e=e||this.options.data).headings){t=h("thead");var n=h("tr");d(e.headings,(function(e){var t=h("th",{html:e});n.appendChild(t)})),t.appendChild(n)}e.data&&e.data.length&&(a=h("tbody"),d(e.data,(function(t){if(e.headings&&e.headings.length!==t.length)throw new Error("The number of rows do not match the number of headings.");var n=h("tr");d(t,(function(e){var t=h("td",{html:e});n.appendChild(t)})),a.appendChild(n)}))),t&&(null!==this.table.tHead&&this.table.removeChild(this.table.tHead),this.table.appendChild(t)),a&&(this.table.tBodies.length&&this.table.removeChild(this.table.tBodies[0]),this.table.appendChild(a))},m=function(e){return this.dt=e,this};m.prototype.swap=function(e){if(e.length&&2===e.length){var t=[];d(this.dt.headings,(function(e,a){t.push(a)}));var a=e[0],n=e[1],i=t[n];t[n]=t[a],t[a]=i,this.order(t)}},m.prototype.order=function(e){var t,a,n,i,s,r,o,l=[[],[],[],[]],c=this.dt;d(e,(function(e,n){s=c.headings[e],r="false"!==s.getAttribute("data-sortable"),(t=s.cloneNode(!0)).originalCellIndex=n,t.sortable=r,l[0].push(t),c.hiddenColumns.indexOf(e)<0&&((a=s.cloneNode(!0)).originalCellIndex=n,a.sortable=r,l[1].push(a))})),d(c.data,(function(t,a){n=t.cloneNode(),i=t.cloneNode(),n.dataIndex=i.dataIndex=a,null!==t.searchIndex&&void 0!==t.searchIndex&&(n.searchIndex=i.searchIndex=t.searchIndex),d(e,(function(e,a){(o=t.cells[e].cloneNode(!0)).data=t.cells[e].data,n.appendChild(o),c.hiddenColumns.indexOf(e)<0&&((o=t.cells[e].cloneNode(!0)).data=t.cells[e].data,i.appendChild(o))})),l[2].push(n),l[3].push(i)})),c.headings=l[0],c.activeHeadings=l[1],c.data=l[2],c.activeRows=l[3],c.update()},m.prototype.hide=function(e){if(e.length){var t=this.dt;d(e,(function(e){t.hiddenColumns.indexOf(e)<0&&t.hiddenColumns.push(e)})),this.rebuild()}},m.prototype.show=function(e){if(e.length){var t,a=this.dt;d(e,(function(e){(t=a.hiddenColumns.indexOf(e))>-1&&a.hiddenColumns.splice(t,1)})),this.rebuild()}},m.prototype.visible=function(e){var t,a=this.dt;return e=e||a.headings.map((function(e){return e.originalCellIndex})),isNaN(e)?r(e)&&(t=[],d(e,(function(e){t.push(a.hiddenColumns.indexOf(e)<0)}))):t=a.hiddenColumns.indexOf(e)<0,t},m.prototype.add=function(e){var t,a=this,n=document.createElement("th");if(!this.dt.headings.length)return this.dt.insert({headings:[e.heading],data:e.data.map((function(e){return[e]}))}),void this.rebuild();this.dt.hiddenHeader?n.innerHTML="":e.heading.nodeName?n.appendChild(e.heading):n.innerHTML=e.heading,this.dt.headings.push(n),d(this.dt.data,(function(n,i){e.data[i]&&(t=document.createElement("td"),e.data[i].nodeName?t.appendChild(e.data[i]):t.innerHTML=e.data[i],t.data=t.innerHTML,e.render&&(t.innerHTML=e.render.call(a,t.data,t,n)),n.appendChild(t))})),e.type&&n.setAttribute("data-type",e.type),e.format&&n.setAttribute("data-format",e.format),e.hasOwnProperty("sortable")&&(n.sortable=e.sortable,n.setAttribute("data-sortable",!0===e.sortable?"true":"false")),this.rebuild(),this.dt.renderHeader()},m.prototype.remove=function(e){r(e)?(e.sort((function(e,t){return t-e})),d(e,(function(e){this.remove(e)}),this)):(this.dt.headings.splice(e,1),d(this.dt.data,(function(t){t.removeChild(t.cells[e])}))),this.rebuild()},m.prototype.sort=function(e,a,n){var i=this.dt;if(i.hasHeadings&&(e<1||e>i.activeHeadings.length))return!1;i.sorting=!0,e-=1;var s,r,o,l=i.data,c=[],h=[],u=0,p=0,b=i.activeHeadings[e];e=b.originalCellIndex,d(l,(function(a){var n=a.cells[e],i=n.hasAttribute("data-content")?n.getAttribute("data-content"):n.data,s=i.replace(/(\$|\,|\s|%)/g,"");if("date"===b.getAttribute("data-type")&&t.moment){var r=!1;b.hasAttribute("data-format")&&(r=b.getAttribute("data-format")),s=function(e,t){var a=!1;if(t)switch(t){case"ISO_8601":a=moment(e,moment.ISO_8601).format("YYYYMMDD");break;case"RFC_2822":a=moment(e,"ddd, MM MMM YYYY HH:mm:ss ZZ").format("YYYYMMDD");break;case"MYSQL":a=moment(e,"YYYY-MM-DD hh:mm:ss").format("YYYYMMDD");break;case"UNIX":a=moment(e).unix();break;default:a=moment(e,t).format("YYYYMMDD")}return a}(i,r)}parseFloat(s)==s?h[p++]={value:Number(s),row:a}:c[u++]={value:i,row:a}})),f.contains(b,"asc")||"asc"==a?(r=g(c,-1),o=g(h,-1),s="descending",f.remove(b,"asc"),f.add(b,"desc")):(r=g(h,1),o=g(c,1),s="ascending",f.remove(b,"desc"),f.add(b,"asc")),i.lastTh&&b!=i.lastTh&&(f.remove(i.lastTh,"desc"),f.remove(i.lastTh,"asc")),i.lastTh=b,l=r.concat(o),i.data=[];var m=[];d(l,(function(e,t){i.data.push(e.row),null!==e.row.searchIndex&&void 0!==e.row.searchIndex&&m.push(t)}),i),i.searchData=m,this.rebuild(),i.update(),n||i.emit("datatable.sort",e,s)},m.prototype.rebuild=function(){var e,t,a,n,i=this.dt,s=[];i.activeRows=[],i.activeHeadings=[],d(i.headings,(function(e,t){e.originalCellIndex=t,e.sortable="false"!==e.getAttribute("data-sortable"),i.hiddenColumns.indexOf(t)<0&&i.activeHeadings.push(e)}),this),d(i.data,(function(r,o){e=r.cloneNode(),t=r.cloneNode(),e.dataIndex=t.dataIndex=o,null!==r.searchIndex&&void 0!==r.searchIndex&&(e.searchIndex=t.searchIndex=r.searchIndex),d(r.cells,(function(s){(a=s.cloneNode(!0)).data=s.data,e.appendChild(a),i.hiddenColumns.indexOf(s.cellIndex)<0&&((n=s.cloneNode(!0)).data=s.data,t.appendChild(n))})),s.push(e),i.activeRows.push(t)})),i.data=s,i.update()};var v=function(e,t){return this.dt=e,this.rows=t,this};v.prototype.build=function(e){var t,a=h("tr"),n=this.dt.headings;return n.length||(n=e.map((function(){return""}))),d(n,(function(n,i){t=h("td"),e[i]||e[i].length||(e[i]=""),t.innerHTML=e[i],t.data=e[i],a.appendChild(t)})),a},v.prototype.render=function(e){return e},v.prototype.add=function(e){if(r(e)){var t=this.dt;r(e[0])?d(e,(function(e,a){t.data.push(this.build(e))}),this):t.data.push(this.build(e)),t.data.length&&(t.hasRows=!0),this.update(),t.columns().rebuild()}},v.prototype.remove=function(e){var t=this.dt;r(e)?(e.sort((function(e,t){return t-e})),d(e,(function(e,a){t.data.splice(e,1)}))):t.data.splice(e,1),this.update(),t.columns().rebuild()},v.prototype.update=function(){d(this.dt.data,(function(e,t){e.dataIndex=t}))};var y=function(e,t){if(this.initialized=!1,this.options=l(i,t),"string"==typeof e&&(e=document.querySelector(e)),this.initialLayout=e.innerHTML,this.initialSortable=this.options.sortable,this.options.header||(this.options.sortable=!1),null===e.tHead&&(!this.options.data||this.options.data&&!this.options.data.headings)&&(this.options.sortable=!1),e.tBodies.length&&!e.tBodies[0].rows.length&&this.options.data&&!this.options.data.data)throw new Error("You seem to be using the data option, but you've not defined any rows.");this.table=e,this.init()};y.extend=function(e,t){"function"==typeof t?y.prototype[e]=t:y[e]=t};var x=y.prototype;return x.init=function(e){if(this.initialized||f.contains(this.table,"dataTable-table"))return!1;var t=this;this.options=l(this.options,e||{}),this.isIE=!!/(msie|trident)/i.test(navigator.userAgent),this.currentPage=1,this.onFirstPage=!0,this.hiddenColumns=[],this.columnRenderers=[],this.selectedColumns=[],this.render(),setTimeout((function(){t.emit("datatable.init"),t.initialized=!0,t.options.plugins&&d(t.options.plugins,(function(e,a){t[a]&&"function"==typeof t[a]&&(t[a]=t[a](e,{each:d,extend:l,classList:f,createElement:h}),e.enabled&&t[a].init&&"function"==typeof t[a].init&&t[a].init())}))}),10)},x.render=function(e){if(e){switch(e){case"page":this.renderPage();break;case"pager":this.renderPager();break;case"header":this.renderHeader()}return!1}var t=this,a=t.options,n="";if(a.data&&b.call(t),a.ajax){var i=a.ajax,s=new XMLHttpRequest;c(s,"progress",(function(e){t.emit("datatable.ajax.progress",e,s)})),c(s,"load",(function(e){if(4===s.readyState)if(t.emit("datatable.ajax.loaded",e,s),200===s.status){var a={};a.data=i.load?i.load.call(t,s):s.responseText,a.type="json",i.content&&i.content.type&&(a.type=i.content.type,a=l(a,i.content)),t.import(a),t.setColumns(!0),t.emit("datatable.ajax.success",e,s)}else t.emit("datatable.ajax.error",e,s)})),c(s,"error",(function(e){t.emit("datatable.ajax.error",e,s)})),c(s,"abort",(function(e){t.emit("datatable.ajax.abort",e,s)})),t.emit("datatable.ajax.loading",s),s.open("GET","string"==typeof i?a.ajax:a.ajax.url),s.send()}if(t.body=t.table.tBodies[0],t.head=t.table.tHead,t.foot=t.table.tFoot,t.body||(t.body=h("tbody"),t.table.appendChild(t.body)),t.hasRows=t.body.rows.length>0,!t.head){var r=h("thead"),o=h("tr");t.hasRows&&(d(t.body.rows[0].cells,(function(){o.appendChild(h("th"))})),r.appendChild(o)),t.head=r,t.table.insertBefore(t.head,t.body),t.hiddenHeader=!a.ajax}if(t.headings=[],t.hasHeadings=t.head.rows.length>0,t.hasHeadings&&(t.header=t.head.rows[0],t.headings=[].slice.call(t.header.cells)),a.header||t.head&&t.table.removeChild(t.table.tHead),a.footer?t.head&&!t.foot&&(t.foot=h("tfoot",{html:t.head.innerHTML}),t.table.appendChild(t.foot)):t.foot&&t.table.removeChild(t.table.tFoot),t.wrapper=h("div",{class:"dataTable-wrapper dataTable-loading"}),n+="<div class='dataTable-top'>",n+=a.layout.top,n+="</div>",n+="<div class='dataTable-container'></div>",n+="<div class='dataTable-bottom'>",n+=a.layout.bottom,n=(n+="</div>").replace("{info}","<div class='dataTable-info'></div>"),a.perPageSelect){var u="<div class='dataTable-dropdown'><label>";u+=a.labels.perPage,u+="</label></div>";var p=h("select",{class:"dataTable-selector"});d(a.perPageSelect,(function(e){var t=e===a.perPage,n=new Option(e,e,t,t);p.add(n)})),u=u.replace("{select}",p.outerHTML),n=n.replace("{select}",u)}else n=n.replace("{select}","");if(a.searchable){var g="<div class='dataTable-search'><input class='dataTable-input' placeholder='"+a.labels.placeholder+"' type='text'></div>";n=n.replace("{search}",g)}else n=n.replace("{search}","");t.hasHeadings&&this.render("header"),f.add(t.table,"dataTable-table");var m=h("div",{class:"dataTable-pagination"}),v=h("ul");m.appendChild(v),n=n.replace(/\{pager\}/g,m.outerHTML),t.wrapper.innerHTML=n,t.container=t.wrapper.querySelector(".dataTable-container"),t.pagers=t.wrapper.querySelectorAll(".dataTable-pagination"),t.label=t.wrapper.querySelector(".dataTable-info"),t.table.parentNode.replaceChild(t.wrapper,t.table),t.container.appendChild(t.table),t.rect=t.table.getBoundingClientRect(),t.data=[].slice.call(t.body.rows),t.activeRows=t.data.slice(),t.activeHeadings=t.headings.slice(),t.update(),a.ajax||t.setColumns(),this.fixHeight(),t.fixColumns(),a.header||f.add(t.wrapper,"no-header"),a.footer||f.add(t.wrapper,"no-footer"),a.sortable&&f.add(t.wrapper,"sortable"),a.searchable&&f.add(t.wrapper,"searchable"),a.fixedHeight&&f.add(t.wrapper,"fixed-height"),a.fixedColumns&&f.add(t.wrapper,"fixed-columns"),t.bindEvents()},x.renderPage=function(){if(this.hasRows&&this.totalPages){this.currentPage>this.totalPages&&(this.currentPage=1);var e=this.currentPage-1,t=a.createDocumentFragment();this.hasHeadings&&(u(this.header,this.isIE),d(this.activeHeadings,(function(e){this.header.appendChild(e)}),this)),d(this.pages[e],(function(e){t.appendChild(this.rows().render(e))}),this),this.clear(t),this.onFirstPage=1===this.currentPage,this.onLastPage=this.currentPage===this.lastPage}else this.clear();var n,i=0,s=0,r=0;if(this.totalPages&&(r=(s=(i=this.currentPage-1)*this.options.perPage)+this.pages[i].length,s+=1,n=this.searching?this.searchData.length:this.data.length),this.label&&this.options.labels.info.length){var o=this.options.labels.info.replace("{start}",s).replace("{end}",r).replace("{page}",this.currentPage).replace("{pages}",this.totalPages).replace("{rows}",n);this.label.innerHTML=n?o:""}1==this.currentPage&&this.fixHeight()},x.renderPager=function(){if(u(this.pagers,this.isIE),this.totalPages>1){var e="pager",t=a.createDocumentFragment(),n=this.onFirstPage?1:this.currentPage-1,i=this.onlastPage?this.totalPages:this.currentPage+1;this.options.firstLast&&t.appendChild(p(e,1,this.options.firstText)),this.options.nextPrev&&t.appendChild(p(e,n,this.options.prevText));var s=this.links;this.options.truncatePager&&(s=function(e,t,a,n,i){var s,r=2*(n=n||2),o=t-n,l=t+n,c=[],u=[];t<4-n+r?l=3+r:t>a-(3-n+r)&&(o=a-(2+r));for(var p=1;p<=a;p++)if(1==p||p==a||p>=o&&p<=l){var g=e[p-1];f.remove(g,"active"),c.push(g)}return d(c,(function(t){var a=t.children[0].getAttribute("data-page");if(s){var n=s.children[0].getAttribute("data-page");if(a-n==2)u.push(e[n]);else if(a-n!=1){var r=h("li",{class:"ellipsis",html:'<a href="#">'+i+"</a>"});u.push(r)}}u.push(t),s=t})),u}(this.links,this.currentPage,this.pages.length,this.options.pagerDelta,this.options.ellipsisText)),f.add(this.links[this.currentPage-1],"active"),d(s,(function(e){f.remove(e,"active"),t.appendChild(e)})),f.add(this.links[this.currentPage-1],"active"),this.options.nextPrev&&t.appendChild(p(e,i,this.options.nextText)),this.options.firstLast&&t.appendChild(p(e,this.totalPages,this.options.lastText)),d(this.pagers,(function(e){e.appendChild(t.cloneNode(!0))}))}},x.renderHeader=function(){var e=this;e.labels=[],e.headings&&e.headings.length&&d(e.headings,(function(t,a){if(e.labels[a]=t.textContent,f.contains(t.firstElementChild,"dataTable-sorter")&&(t.innerHTML=t.firstElementChild.innerHTML),t.sortable="false"!==t.getAttribute("data-sortable"),t.originalCellIndex=a,e.options.sortable&&t.sortable){var n=h("a",{href:"#",class:"dataTable-sorter",html:t.innerHTML});t.innerHTML="",t.setAttribute("data-sortable",""),t.appendChild(n)}})),e.fixColumns()},x.bindEvents=function(){var e=this,t=e.options;if(t.perPageSelect){var a=e.wrapper.querySelector(".dataTable-selector");a&&c(a,"change",(function(a){t.perPage=parseInt(this.value,10),e.update(),e.fixHeight(),e.emit("datatable.perpage",t.perPage)}))}t.searchable&&(e.input=e.wrapper.querySelector(".dataTable-input"),e.input&&c(e.input,"keyup",(function(t){e.search(this.value)}))),c(e.wrapper,"click",(function(a){var n=a.target;"a"===n.nodeName.toLowerCase()&&(n.hasAttribute("data-page")?(e.page(n.getAttribute("data-page")),a.preventDefault()):t.sortable&&f.contains(n,"dataTable-sorter")&&"false"!=n.parentNode.getAttribute("data-sortable")&&(e.columns().sort(e.activeHeadings.indexOf(n.parentNode)+1),a.preventDefault()))}))},x.setColumns=function(e){var t=this;e||d(t.data,(function(e){d(e.cells,(function(e){e.data=e.innerHTML}))})),t.options.columns&&t.headings.length&&d(t.options.columns,(function(e){r(e.select)||(e.select=[e.select]),e.hasOwnProperty("render")&&"function"==typeof e.render&&(t.selectedColumns=t.selectedColumns.concat(e.select),t.columnRenderers.push({columns:e.select,renderer:e.render})),d(e.select,(function(a){var n=t.headings[a];e.type&&n.setAttribute("data-type",e.type),e.format&&n.setAttribute("data-format",e.format),e.hasOwnProperty("sortable")&&n.setAttribute("data-sortable",e.sortable),e.hasOwnProperty("hidden")&&!1!==e.hidden&&t.columns().hide(a),e.hasOwnProperty("sort")&&1===e.select.length&&t.columns().sort(e.select[0]+1,e.sort,!0)}))})),t.hasRows&&(d(t.data,(function(e,t){e.dataIndex=t,d(e.cells,(function(e){e.data=e.innerHTML}))})),t.selectedColumns.length&&d(t.data,(function(e){d(e.cells,(function(a,n){t.selectedColumns.indexOf(n)>-1&&d(t.columnRenderers,(function(i){i.columns.indexOf(n)>-1&&(a.innerHTML=i.renderer.call(t,a.data,a,e))}))}))})),t.columns().rebuild()),t.render("header")},x.destroy=function(){this.table.innerHTML=this.initialLayout,f.remove(this.table,"dataTable-table"),this.wrapper.parentNode.replaceChild(this.table,this.wrapper),this.initialized=!1},x.update=function(){f.remove(this.wrapper,"dataTable-empty"),this.paginate(this),this.render("page"),this.links=[];for(var e=this.pages.length;e--;){var t=e+1;this.links[e]=p(0===e?"active":"",t,t)}this.sorting=!1,this.render("pager"),this.rows().update(),this.emit("datatable.update")},x.paginate=function(){var e=this.options.perPage,t=this.activeRows;return this.searching&&(t=[],d(this.searchData,(function(e){t.push(this.activeRows[e])}),this)),this.pages=t.map((function(a,n){return n%e==0?t.slice(n,n+e):null})).filter((function(e){return e})),this.totalPages=this.lastPage=this.pages.length,this.totalPages},x.fixColumns=function(){if(this.options.fixedColumns&&this.activeHeadings&&this.activeHeadings.length){var e,t=!1;if(this.columnWidths=[],this.table.tHead)d(this.activeHeadings,(function(e){e.style.width=""}),this),d(this.activeHeadings,(function(e,t){var a=e.offsetWidth,n=a/this.rect.width*100;e.style.width=n+"%",this.columnWidths[t]=a}),this);else{e=[],t=h("thead");var a=h("tr"),n=this.table.tBodies[0].rows[0].cells;d(n,(function(){var t=h("th");a.appendChild(t),e.push(t)})),t.appendChild(a),this.table.insertBefore(t,this.body);var i=[];d(e,(function(e,t){var a=e.offsetWidth,n=a/this.rect.width*100;i.push(n),this.columnWidths[t]=a}),this),d(this.data,(function(e){d(e.cells,(function(e,t){this.columns(e.cellIndex).visible()&&(e.style.width=i[t]+"%")}),this)}),this),this.table.removeChild(t)}}},x.fixHeight=function(){this.options.fixedHeight&&(this.container.style.height=null,this.rect=this.container.getBoundingClientRect(),this.container.style.height=this.rect.height+"px")},x.search=function(e){if(!this.hasRows)return!1;var t=this;if(e=e.toLowerCase(),this.currentPage=1,this.searching=!0,this.searchData=[],!e.length)return this.searching=!1,this.update(),this.emit("datatable.search",e,this.searchData),f.remove(this.wrapper,"search-results"),!1;this.clear(),d(this.data,(function(a,n){var i=this.searchData.indexOf(a)>-1;e.split(" ").reduce((function(e,n){for(var i=!1,s=null,r=0;r<a.cells.length;r++)if(((s=a.cells[r]).hasAttribute("data-content")?s.getAttribute("data-content"):s.textContent).toLowerCase().indexOf(n)>-1&&t.columns(s.cellIndex).visible()){i=!0;break}return e&&i}),!0)&&!i?(a.searchIndex=n,this.searchData.push(n)):a.searchIndex=null}),this),f.add(this.wrapper,"search-results"),t.searchData.length?t.update():(f.remove(t.wrapper,"search-results"),t.setMessage(t.options.labels.noRows)),this.emit("datatable.search",e,this.searchData)},x.page=function(e){return e!=this.currentPage&&(isNaN(e)||(this.currentPage=parseInt(e,10)),!(e>this.pages.length||e<0)&&(this.render("page"),this.render("pager"),void this.emit("datatable.page",e)))},x.sortColumn=function(e,t){this.columns().sort(e,t)},x.insert=function(e){var t=this,a=[];if(s(e)){if(e.headings&&!t.hasHeadings&&!t.hasRows){var n,i=h("tr");d(e.headings,(function(e){n=h("th",{html:e}),i.appendChild(n)})),t.head.appendChild(i),t.header=i,t.headings=[].slice.call(i.cells),t.hasHeadings=!0,t.options.sortable=t.initialSortable,t.render("header")}e.data&&r(e.data)&&(a=e.data)}else r(e)&&d(e,(function(e){var n=[];d(e,(function(e,a){var i=t.labels.indexOf(a);i>-1&&(n[i]=e)})),a.push(n)}));a.length&&(t.rows().add(a),t.hasRows=!0),t.update(),t.fixColumns()},x.refresh=function(){this.options.searchable&&(this.input.value="",this.searching=!1),this.currentPage=1,this.onFirstPage=!0,this.update(),this.emit("datatable.refresh")},x.clear=function(e){this.body&&u(this.body,this.isIE);var t=this.body;this.body||(t=this.table),e&&("string"==typeof e&&(a.createDocumentFragment().innerHTML=e),t.appendChild(e))},x.export=function(e){if(!this.hasHeadings&&!this.hasRows)return!1;var t,a,i,o,d=this.activeHeadings,c=[],h=[];if(!s(e))return!1;var u=l({download:!0,skipColumn:[],lineDelimiter:"\n",columnDelimiter:",",tableName:"myTable",replacer:null,space:4},e);if(u.type){if("txt"!==u.type&&"csv"!==u.type||(c[0]=this.header),u.selection)if(isNaN(u.selection)){if(r(u.selection))for(t=0;t<u.selection.length;t++)c=c.concat(this.pages[u.selection[t]-1])}else c=c.concat(this.pages[u.selection-1]);else c=c.concat(this.activeRows);if(c.length){if("txt"===u.type||"csv"===u.type){for(i="",t=0;t<c.length;t++){for(a=0;a<c[t].cells.length;a++)if(u.skipColumn.indexOf(d[a].originalCellIndex)<0&&this.columns(d[a].originalCellIndex).visible()){var p=c[t].cells[a].textContent;(p=(p=(p=(p=p.trim()).replace(/\s{2,}/g," ")).replace(/\n/g,"  ")).replace(/"/g,'""')).indexOf(",")>-1&&(p='"'+p+'"'),i+=p+u.columnDelimiter}i=i.trim().substring(0,i.length-1),i+=u.lineDelimiter}i=i.trim().substring(0,i.length-1),u.download&&(i="data:text/csv;charset=utf-8,"+i)}else if("sql"===u.type){for(i="INSERT INTO `"+u.tableName+"` (",t=0;t<d.length;t++)u.skipColumn.indexOf(d[t].originalCellIndex)<0&&this.columns(d[t].originalCellIndex).visible()&&(i+="`"+d[t].textContent+"`,");for(i=i.trim().substring(0,i.length-1),i+=") VALUES ",t=0;t<c.length;t++){for(i+="(",a=0;a<c[t].cells.length;a++)u.skipColumn.indexOf(d[a].originalCellIndex)<0&&this.columns(d[a].originalCellIndex).visible()&&(i+='"'+c[t].cells[a].textContent+'",');i=i.trim().substring(0,i.length-1),i+="),"}i=i.trim().substring(0,i.length-1),i+=";",u.download&&(i="data:application/sql;charset=utf-8,"+i)}else if("json"===u.type){for(a=0;a<c.length;a++)for(h[a]=h[a]||{},t=0;t<d.length;t++)u.skipColumn.indexOf(d[t].originalCellIndex)<0&&this.columns(d[t].originalCellIndex).visible()&&(h[a][d[t].textContent]=c[a].cells[t].textContent);i=JSON.stringify(h,u.replacer,u.space),u.download&&(i="data:application/json;charset=utf-8,"+i)}return u.download&&(u.filename=u.filename||"datatable_export",u.filename+="."+u.type,i=encodeURI(i),(o=document.createElement("a")).href=i,o.download=u.filename,n.appendChild(o),o.click(),n.removeChild(o)),i}}return!1},x.import=function(e){var t=!1;if(!s(e))return!1;if((e=l({lineDelimiter:"\n",columnDelimiter:","},e)).data.length||s(e.data)){if("csv"===e.type){t={data:[]};var a=e.data.split(e.lineDelimiter);a.length&&(e.headings&&(t.headings=a[0].split(e.columnDelimiter),a.shift()),d(a,(function(a,n){t.data[n]=[];var i=a.split(e.columnDelimiter);i.length&&d(i,(function(e){t.data[n].push(e)}))})))}else if("json"===e.type){var n=function(e){var t=!1;try{t=JSON.parse(e)}catch(e){return!1}return!(null===t||!r(t)&&!s(t))&&t}(e.data);n?(t={headings:[],data:[]},d(n,(function(e,a){t.data[a]=[],d(e,(function(e,n){t.headings.indexOf(n)<0&&t.headings.push(n),t.data[a].push(e)}))}))):console.warn("That's not valid JSON!")}s(e.data)&&(t=e.data),t&&this.insert(t)}return!1},x.print=function(){var e=this.activeHeadings,a=this.activeRows,n=h("table"),i=h("thead"),s=h("tbody"),r=h("tr");d(e,(function(e){r.appendChild(h("th",{html:e.textContent}))})),i.appendChild(r),d(a,(function(e){var t=h("tr");d(e.cells,(function(e){t.appendChild(h("td",{html:e.textContent}))})),s.appendChild(t)})),n.appendChild(i),n.appendChild(s);var o=t.open();o.document.body.appendChild(n),o.print()},x.setMessage=function(e){var t=1;this.hasRows&&(t=this.data[0].cells.length),f.add(this.wrapper,"dataTable-empty"),this.clear(h("tr",{html:'<td class="dataTables-empty" colspan="'+t+'">'+e+"</td>"}))},x.columns=function(e){return new m(this,e)},x.rows=function(e){return new v(this,e)},x.on=function(e,t){this.events=this.events||{},this.events[e]=this.events[e]||[],this.events[e].push(t)},x.off=function(e,t){this.events=this.events||{},e in this.events!=0&&this.events[e].splice(this.events[e].indexOf(t),1)},x.emit=function(e){if(this.events=this.events||{},e in this.events!=0)for(var t=0;t<this.events[e].length;t++)this.events[e][t].apply(this,Array.prototype.slice.call(arguments,1))},y},"object"===o(t)?e.exports=r():(i=[],void 0===(s="function"==typeof(n=r())?n.apply(t,i):n)||(e.exports=s))}},t={};function a(n){var i=t[n];if(void 0!==i)return i.exports;var s=t[n]={exports:{}};return e[n].call(s.exports,s,s.exports,a),s.exports}a.n=e=>{var t=e&&e.__esModule?()=>e.default:()=>e;return a.d(t,{a:t}),t},a.d=(e,t)=>{for(var n in t)a.o(t,n)&&!a.o(e,n)&&Object.defineProperty(e,n,{enumerable:!0,get:t[n]})},a.g=function(){if("object"==typeof globalThis)return globalThis;try{return this||new Function("return this")()}catch(e){if("object"==typeof window)return window}}(),a.o=(e,t)=>Object.prototype.hasOwnProperty.call(e,t),a.r=e=>{"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})};var n={};return(()=>{"use strict";a.r(n),a.d(n,{Accordion:()=>t,DataTable:()=>s(),IFrame:()=>r,Progress:()=>o,Rating:()=>l,Sidebar:()=>d,Stepper:()=>c});var e=0,t=function t(a,n){var i=this,s=this,r=!1;if(Array.isArray(a))return!!a.length&&a.map((function(e){return new t(e,n)}));var o={init:function(){var t=this;this.options=Object.assign({duration:600,ariaEnabled:!0,collapse:!0,showMultiple:!1,openOnInit:[],elementClass:"accordion",triggerClass:"accordion-header",panelClass:"accordion-panel",activeClass:"is-active",beforeOpen:function(){},onOpen:function(){},beforeClose:function(){},onClose:function(){}},n);var i=this.options,r=i.elementClass,o=i.openOnInit,l="string"==typeof a;this.container=l?document.querySelector(a):a,this.elements=Array.from(this.container.querySelectorAll(".".concat(r))),this.firstElement=this.elements[0],this.lastElement=this.elements[this.elements.length-1],this.currFocusedIdx=0,this.elements.map((function(a,n){return a.classList.add("js-enabled"),t.generateIDs(a),t.setARIA(a),t.setTransition(a),e++,o.includes(n)?t.showElement(a,!1):t.closeElement(a,!1)})),s.attachEvents()},setTransition:function(e){var t=arguments.length>1&&void 0!==arguments[1]&&arguments[1],a=this.options,n=a.duration,i=a.panelClass,s=e.querySelector(".".concat(i)),r=l("transitionDuration");s.style[r]=t?null:"".concat(n,"ms")},generateIDs:function(t){var a=this.options,n=a.triggerClass,i=a.panelClass,s=t.querySelector(".".concat(n)),r=t.querySelector(".".concat(i));t.setAttribute("id","ac-".concat(e)),s.setAttribute("id","ac-trigger-".concat(e)),r.setAttribute("id","ac-panel-".concat(e))},removeIDs:function(e){var t=this.options,a=t.triggerClass,n=t.panelClass,i=e.querySelector(".".concat(a)),s=e.querySelector(".".concat(n));e.removeAttribute("id"),i.removeAttribute("id"),s.removeAttribute("id")},setARIA:function(t){var a=this.options,n=a.ariaEnabled,i=a.triggerClass,s=a.panelClass;if(n){var r=t.querySelector(".".concat(i)),o=t.querySelector(".".concat(s));r.setAttribute("role","button"),r.setAttribute("aria-controls","ac-panel-".concat(e)),r.setAttribute("aria-disabled",!1),r.setAttribute("aria-expanded",!1),o.setAttribute("role","region"),o.setAttribute("aria-labelledby","ac-trigger-".concat(e))}},updateARIA:function(e,t){var a=t.ariaExpanded,n=t.ariaDisabled,i=this.options,s=i.ariaEnabled,r=i.triggerClass;if(s){var o=e.querySelector(".".concat(r));o.setAttribute("aria-expanded",a),o.setAttribute("aria-disabled",n)}},removeARIA:function(e){var t=this.options,a=t.ariaEnabled,n=t.triggerClass,i=t.panelClass;if(a){var s=e.querySelector(".".concat(n)),r=e.querySelector(".".concat(i));s.removeAttribute("role"),s.removeAttribute("aria-controls"),s.removeAttribute("aria-disabled"),s.removeAttribute("aria-expanded"),r.removeAttribute("role"),r.removeAttribute("aria-labelledby")}},focus:function(e,t){e.preventDefault();var a=this.options.triggerClass;t.querySelector(".".concat(a)).focus()},focusFirstElement:function(e){this.focus(e,this.firstElement),this.currFocusedIdx=0},focusLastElement:function(e){this.focus(e,this.lastElement),this.currFocusedIdx=this.elements.length-1},focusNextElement:function(e){var t=this.currFocusedIdx+1;if(t>this.elements.length-1)return this.focusFirstElement(e);this.focus(e,this.elements[t]),this.currFocusedIdx=t},focusPrevElement:function(e){var t=this.currFocusedIdx-1;if(t<0)return this.focusLastElement(e);this.focus(e,this.elements[t]),this.currFocusedIdx=t},showElement:function(e){var t=!(arguments.length>1&&void 0!==arguments[1])||arguments[1],a=this.options,n=a.panelClass,i=a.activeClass,s=a.collapse,r=a.beforeOpen,o=e.querySelector(".".concat(n)),l=o.scrollHeight;e.classList.add(i),t&&r(e),requestAnimationFrame((function(){requestAnimationFrame((function(){o.style.height=t?"".concat(l,"px"):"auto"}))})),this.updateARIA(e,{ariaExpanded:!0,ariaDisabled:!s})},closeElement:function(e){var t=!(arguments.length>1&&void 0!==arguments[1])||arguments[1],a=this.options,n=a.panelClass,i=a.activeClass,s=a.beforeClose,r=e.querySelector(".".concat(n)),o=r.scrollHeight;e.classList.remove(i),t?(s(e),requestAnimationFrame((function(){r.style.height="".concat(o,"px"),requestAnimationFrame((function(){r.style.height=0}))})),this.updateARIA(e,{ariaExpanded:!1,ariaDisabled:!1})):r.style.height=0},toggleElement:function(e){var t=this.options,a=t.activeClass,n=t.collapse,i=e.classList.contains(a);if(!i||n)return i?this.closeElement(e):this.showElement(e)},closeElements:function(){var e=this,t=this.options,a=t.activeClass;t.showMultiple||this.elements.map((function(t,n){t.classList.contains(a)&&n!=e.currFocusedIdx&&e.closeElement(t)}))},handleClick:function(e){var t=this,a=e.currentTarget;this.elements.map((function(n,i){n.contains(a)&&"A"!==e.target.nodeName&&(t.currFocusedIdx=i,t.closeElements(),t.focus(e,n),t.toggleElement(n))}))},handleKeydown:function(e){switch(e.keyCode){case 38:return this.focusPrevElement(e);case 40:return this.focusNextElement(e);case 36:return this.focusFirstElement(e);case 35:return this.focusLastElement(e);default:return null}},handleTransitionEnd:function(e){if("height"===e.propertyName){var t=this.options,a=t.onOpen,n=t.onClose,i=e.currentTarget,s=parseInt(i.style.height),r=this.elements.find((function(e){return e.contains(i)}));s>0?(i.style.height="auto",a(r)):n(r)}}};this.attachEvents=function(){if(!r){var e=o.options,t=e.triggerClass,a=e.panelClass;o.handleClick=o.handleClick.bind(o),o.handleKeydown=o.handleKeydown.bind(o),o.handleTransitionEnd=o.handleTransitionEnd.bind(o),o.elements.map((function(e){var n=e.querySelector(".".concat(t)),i=e.querySelector(".".concat(a));n.addEventListener("click",o.handleClick),n.addEventListener("keydown",o.handleKeydown),i.addEventListener("webkitTransitionEnd",o.handleTransitionEnd),i.addEventListener("transitionend",o.handleTransitionEnd)})),r=!0}},this.detachEvents=function(){if(r){var e=o.options,t=e.triggerClass,a=e.panelClass;o.elements.map((function(e){var n=e.querySelector(".".concat(t)),i=e.querySelector(".".concat(a));n.removeEventListener("click",o.handleClick),n.removeEventListener("keydown",o.handleKeydown),i.removeEventListener("webkitTransitionEnd",o.handleTransitionEnd),i.removeEventListener("transitionend",o.handleTransitionEnd)})),r=!1}},this.toggle=function(e){var t=o.elements.find((function(t,a){return a===e}));t&&o.toggleElement(t)},this.open=function(e){var t=o.elements.find((function(t,a){return a===e}));t&&o.showElement(t)},this.openAll=function(){o.elements.map((function(e){return o.showElement(e,!1)}))},this.close=function(e){var t=o.elements.find((function(t,a){return a===e}));t&&o.closeElement(t)},this.closeAll=function(){o.elements.map((function(e){return o.closeElement(e,!1)}))},this.destroy=function(){i.detachEvents(),i.openAll(),o.elements.map((function(e){o.removeIDs(e),o.removeARIA(e),o.setTransition(e,!0)})),r=!0};var l=function(e){return"string"==typeof document.documentElement.style[e]?e:(e=d(e),e="webkit".concat(e))},d=function(e){return e.charAt(0).toUpperCase()+e.slice(1)};o.init()},i=a(160),s=a.n(i);function r(e){var t,a={src:e.getAttribute("src")||null,frameBorder:e.getAttribute("frameBorder")||"0",allowFullScreen:e.getAttribute("allowFullScreen")||!0,id:e.getAttribute("id")||!1,height:e.getAttribute("height")||"100%",width:e.getAttribute("width")||"100%",title:e.getAttribute("title")||null,style:e.getAttribute("style")||void 0};t=document.createElement("iframe"),e.appendChild(t),function(e,t){for(var a in t)e.setAttribute(a,t[a])}(t,a)}function o(e){var t,a,n,i,s,r=e.querySelector(".progress-bar");t=e.getAttribute("max"),a=e.getAttribute("min"),n=e.getAttribute("value"),i=e.getAttribute("height"),s=(n-a)/(t-a)*100,r.style.width=t&&a&&n?"".concat(s,"%"):"0%",e.style.height=i?"".concat(i,"px"):"10px"}function l(e){e.getAttribute("data-rating");var t=e.querySelectorAll(".star"),a=function(t){e.setAttribute("data-rating",t.currentTarget.getAttribute("data-value"))},n=function(e){var a=e.currentTarget.getAttribute("data-value");s(a),t.forEach((function(e){e.childNodes[1].style.opacity=a==e.getAttribute("data-value")?1:0}))},i=function(a){var n=e.getAttribute("data-rating");s(n),t.forEach((function(e){e.childNodes[1].style.opacity=0}))},s=function(e){t.forEach((function(t){t.style.color=e>=t.getAttribute("data-value")?"yellow":"gray"}))};i(),t.forEach((function(e){e.addEventListener("click",a),e.addEventListener("mouseover",n)})),e.addEventListener("mouseout",i)}function d(e){function t(){window.innerWidth<768?(e.classList.add("sidebar--mobile"),e.querySelector(".sidebar-brand").classList.add("sidebar-brand-none")):(e.classList.remove("sidebar--mobile"),e.querySelector(".sidebar-brand").classList.remove("sidebar-brand-none"))}null!==e.getAttribute("color")&&e.classList.add("sidebar-white"),e.querySelectorAll(".sidebar-dropdown .sidebar-item").forEach((function(e){e.addEventListener("click",(function(t){e.classList.toggle("active")}))})),e.querySelector(".sidebar-toggler").addEventListener("click",(function(){e.classList.contains("sidebar--mobile")?(e.classList.toggle("sidebar--mobile"),e.querySelector(".sidebar-brand").classList.toggle("sidebar-brand-none")):(e.querySelector(".sidebar-brand").classList.toggle("sidebar-brand-none"),e.classList.toggle("sidebar--mobile"))}));var a=window.location.href;function n(t){e.querySelectorAll(t).forEach((function(e){var t=e.href;t&&(t===a?e.classList.add("active"):e.classList.remove("active"))}))}window.addEventListener("DOMContentLoaded",t),window.addEventListener("resize",t),n(".sidebar-item"),n(".sub-menu-item"),e.querySelectorAll(".sidebar-dropdown").forEach((function(e){var t=e.querySelector(".sidebar-item"),a=e.querySelector(".sidebar-sub-menu"),n=null;function i(){sidebar.offsetWidth<100&&(a.setAttribute("data-show",""),n=Popper.createPopper(t,a,{placement:"right",strategy:"fixed",modifiers:[{name:"computeStyles",options:{adaptive:!1}}]}))}function s(){sidebar.offsetWidth<100&&(a.removeAttribute("data-show"),n&&(n.destroy(),n=null))}["mouseenter","focus"].forEach((function(e){t.addEventListener(e,i),a.addEventListener(e,i)})),["mouseleave","blur"].forEach((function(e){t.addEventListener(e,s),a.addEventListener(e,s)}))}))}function c(e){function t(t){e.querySelectorAll(".step").forEach((function(e){var a=e.getAttribute("id");a<t?(e.classList.remove("active"),e.classList.add("prev")):a==t?(e.classList.remove("prev"),e.classList.add("active")):(e.classList.remove("prev"),e.classList.remove("active"))})),e.querySelectorAll(".stepper-content").forEach((function(e){e.getAttribute("stepper-label")==t?e.classList.add("show"):e.classList.remove("show")}))}c.prototype.steps=function(){return e.querySelectorAll(".steps")},c.prototype.navigate=function(e){t(e)},function(){e.style.height=e.getAttribute("height")||"100%";for(var t=e.querySelectorAll(".step"),a=0;a<t.length;a++){1==t[a].getAttribute("id")&&t[a].classList.add("active");var n=document.createElement("div"),i=t[a].getAttribute("icon");n.classList.add("step-indicator"),a==t.length-1?n.innerHTML+='<div class="step-node"><i class="'.concat(i,'"></i></div>'):n.innerHTML+='<div class="step-node"><i class="'.concat(i,'"></i></div><div class="step-divider"><span></span><span></span></div>'),t[a].appendChild(n)}e.querySelector(".stepper-content").classList.add("show")}(),e.querySelectorAll(".step").forEach((function(e){e.querySelector(".step-node").addEventListener("click",(function(){return t(e.getAttribute("id"))}))}))}})(),n})()}));