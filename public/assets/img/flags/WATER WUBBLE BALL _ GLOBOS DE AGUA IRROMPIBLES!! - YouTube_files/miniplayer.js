(function(g){var window=this;var N5=function(a,b){var c="ytp-miniplayer-button-bottom-right";var d=g.V?{D:"div",Y:["ytp-icon","ytp-icon-expand-watch-page"]}:{D:"svg",P:{height:"18px",version:"1.1",viewBox:"0 0 22 18",width:"22px"},K:[{D:"g",P:{fill:"none","fill-rule":"evenodd",stroke:"none","stroke-width":"1"},K:[{D:"g",P:{transform:"translate(-1.000000, -3.000000)"},K:[{D:"polygon",P:{points:"0 0 24 0 24 24 0 24"}},{D:"path",P:{d:"M19,7 L5,7 L5,17 L19,17 L19,7 Z M23,19 L23,4.98 C23,3.88 22.1,3 21,3 L3,3 C1.9,3 1,3.88 1,4.98 L1,19 C1,20.1 1.9,21 3,21 L21,21 C22.1,21 23,20.1 23,19 Z M21,19.02 L3,19.02 L3,4.97 L21,4.97 L21,19.02 Z",
fill:"#fff","fill-rule":"nonzero"}}]}]}]};var e="Abrir p\u00e1gina del v\u00eddeo";a.O().ia("kevlar_miniplayer_expand_top")&&(c="ytp-miniplayer-button-top-left",d=g.V?{D:"div",Y:["ytp-icon","ytp-icon-expand-miniplayer"]}:{D:"svg",P:{height:"24px",version:"1.1",viewBox:"0 0 24 24",width:"24px"},K:[{D:"g",P:{fill:"none","fill-rule":"evenodd",stroke:"none","stroke-width":"1"},K:[{D:"g",P:{transform:"translate(12.000000, 12.000000) scale(-1, 1) translate(-12.000000, -12.000000) "},K:[{D:"path",P:{d:"M19,19 L5,19 L5,5 L12,5 L12,3 L5,3 C3.89,3 3,3.9 3,5 L3,19 C3,20.1 3.89,21 5,21 L19,21 C20.1,21 21,20.1 21,19 L21,12 L19,12 L19,19 Z M14,3 L14,5 L17.59,5 L7.76,14.83 L9.17,16.24 L19,6.41 L19,10 L21,10 L21,3 L14,3 Z",
fill:"#fff","fill-rule":"nonzero"}}]}]}]},e="Expandir");g.T.call(this,{D:"button",Y:["ytp-miniplayer-expand-watch-page-button","ytp-button",c],P:{title:"{{title}}","data-tooltip-target-id":"ytp-miniplayer-expand-watch-page-button"},K:[d]});this.H=a;this.oa("click",this.onClick,this);this.na("title",g.YN(a,e,"i"));g.Ke(this,g.FO(b.tb(),this.element))},O5=function(a){g.T.call(this,{D:"div",
J:"ytp-miniplayer-ui"});this.F=!1;this.player=a;this.M(a,"minimized",this.ZH);this.M(a,"onStateChange",this.HO)},P5=function(a){g.rN.call(this,a);
this.o=new O5(this.player);this.o.hide();g.fN(this.player,this.o.element,4);a.app.I.o&&(this.load(),g.I(a.getRootNode(),"ytp-player-minimized",!0))};
g.t(N5,g.T);N5.prototype.onClick=function(){this.H.sa("onExpandMiniplayer")};g.t(O5,g.T);g.k=O5.prototype;
g.k.show=function(){this.o=new g.rn(this.YH,null,this);this.o.start();if(!this.F){this.tooltip=new g.VR(this.player,this);g.A(this,this.tooltip);g.fN(this.player,this.tooltip.element,4);this.tooltip.Ud=.6;this.ac=new g.IO(this.player);g.A(this,this.ac);this.u=new g.T({D:"div",J:"ytp-miniplayer-scrim"});g.A(this,this.u);this.u.ca(this.element);this.M(this.u.element,"click",this.AB);var a=new g.T({D:"button",Y:["ytp-miniplayer-close-button","ytp-button"],P:{"aria-label":"Cerrar"},K:[g.aM()]});g.A(this,
a);a.ca(this.u.element);this.M(a.element,"click",this.Uz);a=new N5(this.player,this);g.A(this,a);a.ca(this.u.element);this.A=new g.T({D:"div",J:"ytp-miniplayer-controls"});g.A(this,this.A);this.A.ca(this.u.element);this.M(this.A.element,"click",this.AB);var b=new g.T({D:"div",J:"ytp-miniplayer-button-container"});g.A(this,b);b.ca(this.A.element);a=new g.T({D:"div",J:"ytp-miniplayer-play-button-container"});g.A(this,a);a.ca(this.A.element);var c=new g.T({D:"div",J:"ytp-miniplayer-button-container"});
g.A(this,c);c.ca(this.A.element);this.I=new g.yQ(this.player,this,!1);g.A(this,this.I);this.I.ca(b.element);b=new g.uQ(this.player,this);g.A(this,b);b.ca(a.element);this.nextButton=new g.yQ(this.player,this,!0);g.A(this,this.nextButton);this.nextButton.ca(c.element);this.G=new g.HR(this.player,this);g.A(this,this.G);this.G.ca(this.u.element);this.B=new g.HQ(this.player,this);g.A(this,this.B);g.fN(this.player,this.B.element,4);this.C=new g.T({D:"div",J:"ytp-miniplayer-buttons"});g.A(this,this.C);g.fN(this.player,
this.C.element,4);a=new g.T({D:"button",Y:["ytp-miniplayer-close-button","ytp-button"],P:{"aria-label":"Cerrar"},K:[g.aM()]});g.A(this,a);a.ca(this.C.element);this.M(a.element,"click",this.Uz);a=new g.T({D:"button",Y:["ytp-miniplayer-replay-button","ytp-button"],P:{"aria-label":"Cerrar"},K:[g.oM()]});g.A(this,a);a.ca(this.C.element);this.M(a.element,"click",this.EM);this.M(this.player,"presentingplayerstatechange",this.aI);this.M(this.player,"appresize",this.Qa);this.M(this.player,"fullscreentoggled",
this.Qa);this.Qa();this.F=!0}0!==this.player.getPlayerState()&&g.T.prototype.show.call(this);this.B.show();this.player.unloadModule("annotations_module")};
g.k.hide=function(){this.o&&(this.o.dispose(),this.o=void 0);g.T.prototype.hide.call(this);this.player.app.I.o||(this.F&&this.B.hide(),this.player.loadModule("annotations_module"))};
g.k.X=function(){this.o&&(this.o.dispose(),this.o=void 0);g.T.prototype.X.call(this)};
g.k.Uz=function(){this.player.stopVideo();this.player.sa("onCloseMiniplayer")};
g.k.EM=function(){this.player.playVideo()};
g.k.AB=function(a){if(a.target===this.u.element||a.target===this.A.element)g.P(this.player.O().experiments,"kevlar_miniplayer_play_pause_on_scrim")?g.DC(g.NL(this.player))?this.player.pauseVideo():this.player.playVideo():this.player.sa("onExpandMiniplayer")};
g.k.ZH=function(){g.I(this.player.getRootNode(),"ytp-player-minimized",this.player.app.I.o)};
g.k.YH=function(){this.B.Zb();this.G.Zb();this.o&&this.o.start()};
g.k.aI=function(a){g.S(a.state,32)&&this.tooltip.hide()};
g.k.Qa=function(){this.B.setPosition(0,g.OM(this.player).getPlayerSize().width,!1);this.B.Tv()};
g.k.HO=function(a){this.player.app.I.o&&(0===a?this.hide():this.show())};
g.k.tb=function(){return this.tooltip};
g.k.Ic=function(){return!1};
g.k.ge=function(){return!1};
g.k.qj=function(){return!1};
g.k.zv=function(){};
g.k.Si=function(){};
g.k.Wl=function(){};
g.k.Im=function(){return null};
g.k.eu=function(){return new g.th(0,0,0,0)};
g.k.handleGlobalKeyDown=function(){return!1};
g.k.handleGlobalKeyUp=function(){return!1};
g.k.bl=function(a,b,c,d,e){var f=0,h=d=0,l=g.Ph(a);if(b){c=g.Bn(b,"ytp-prev-button")||g.Bn(b,"ytp-next-button");var m=g.Bn(b,"ytp-play-button"),n=g.Bn(b,"ytp-miniplayer-expand-watch-page-button");c?f=h=12:m?(b=g.Mh(b,this.element),h=b.x,f=b.y-12):n&&(h=g.Bn(b,"ytp-miniplayer-button-top-left"),f=g.Mh(b,this.element),b=g.Ph(b),h?(h=8,f=f.y+40):(h=f.x-l.width+b.width,f=f.y-20))}else h=c-l.width/2,d=25+(e||0);b=g.OM(this.player).getPlayerSize().width;e=f+(e||0);l=g.Sd(h,0,b-l.width);e?(a.style.top=e+
"px",a.style.bottom=""):(a.style.top="",a.style.bottom=d+"px");a.style.left=l+"px"};
g.k.showControls=function(){};
g.k.fu=function(){};
g.k.Qg=function(){return!1};g.t(P5,g.rN);P5.prototype.create=function(){};
P5.prototype.Mf=function(){return!1};
P5.prototype.load=function(){this.player.hideControls();this.o.show()};
P5.prototype.unload=function(){this.player.showControls();this.o.hide()};g.GN.miniplayer=P5;})(_yt_player);
