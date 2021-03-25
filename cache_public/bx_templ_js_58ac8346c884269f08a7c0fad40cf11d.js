
 {
function BxDolPage(oOptions){this._sObjName=oOptions.sObjName==undefined?'oBxDolPage':oOptions.sObjName;this._isStickyColumns=oOptions.isStickyColumns==undefined?!1:oOptions.isStickyColumns;this._iLastSc=0;var $this=this;$(document).ready(function(){$this.init()})}
BxDolPage.prototype.init=function(){var $this=this;if($this._isStickyColumns&&!$('html').hasClass('bx-media-phone')){$(window).resize(function(){$this.stickyBlocks()});$(window).scroll(function(){$this.stickyBlocks()})}};BxDolPage.prototype.stickyBlocks=function(){iSc=$(window).scrollTop();$.each($('.bx-layout-col'),function(index,val){if($(this).css('position')=='sticky'){var iCh=$(this).height();var iWh=$(window).height();if($('#bx-toolbar').css('position')=='fixed'){console.log($('#bx-content-main').offset().top-$('.bx-menu-toolbar-padding').height());$(this).css('top',$('#bx-toolbar').height()+'px')}else{$(this).css('top','60px')}
if(iCh>iWh){if(iCh-$(window).scrollTop()-$(window).height()<0){var iMinS=(iWh-iCh);if($(this).css('top')==''){$(this).css('top',iMinS+'px')}else{var iCurS=new Number($(this).css('top').replace('px',''))-iSc+this._iLastSc;if(iCurS>0){console.log(2);$(this).css('top','0px')}
if(iCurS<iMinS){console.log(3);$(this).css('top',iMinS+'px')}
if(iCurS<0&&iCurS>iMinS){console.log(4);$(this).css('top',iCurS+'px')}}}}}});this._iLastSc=iSc<=0?0:iSc}
 }

 {
function BxDolLiveUpdates(oOptions){this._sActionsUrl=oOptions.sActionsUrl==undefined?sUrlRoot+'live_updates.php':oOptions.sActionsUrl;this._sObjName=oOptions.sObjName==undefined?'oLiveUpdates':oOptions.sObjName;this._iInterval=oOptions.iInterval==undefined?3000:oOptions.iInterval;this._aSystemsActive=oOptions.aSystemsActive==undefined?{}:oOptions.aSystemsActive;this._aSystemsTransient=oOptions.aSystemsTransient==undefined?{}:oOptions.aSystemsTransient;this._bServerRequesting=oOptions.bServerRequesting==undefined?!1:oOptions.bServerRequesting;this._sHash=oOptions.sHash==undefined?'':oOptions.sHash;this._iIndex=0;this._iHandler=0;this._bBusy=!1;this.init()}
BxDolLiveUpdates.prototype.init=function(){var $this=this;if(this._iHandler)
this.destroy();$(document).ready(function(){$this.perform();$this._iHandler=setInterval(function(){$this.perform()},$this._iInterval)})};BxDolLiveUpdates.prototype.add=function(oData){if(!oData)
return;if(oData.name!=undefined&&oData.value!=undefined){if(!this._aSystemsActive[oData.name])
this._aSystemsActive[oData.name]=oData.value;if(!this._aSystemsTransient[oData.name])
this._aSystemsTransient[oData.name]=1}
if(oData.hash!=undefined)
this._sHash=oData.hash};BxDolLiveUpdates.prototype.destroy=function(){if(this._iHandler)
clearInterval(this._iHandler)};BxDolLiveUpdates.prototype.perform=function(){if(!this._bServerRequesting||this._bBusy)
return;var $this=this;var oDate=new Date();this._bBusy=!0;$.post(this._sActionsUrl,{index:this._iIndex,systems_active:this._aSystemsActive,systems_transient:this._aSystemsTransient,hash:this._sHash,_t:oDate.getTime()},function(aData){$.each(aData,function(iIndex,oValue){if(oValue.system&&$this._aSystemsActive[oValue.system]!=undefined&&oValue.data)
$this._aSystemsActive[oValue.system]=oValue.data.count_new;if(oValue.method){var oFunc=function(oData){eval(oValue.method)};oFunc(oValue.data)}});$this._bBusy=!1},'json');this._iIndex+=1}
 }
