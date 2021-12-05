function getStyle(obj,name){
					if(window.getComputedStyle){
						return getComputedStyle(obj,null)[name];
					}else{
						return obj.currentStyle[name];
					}
				}
				
				var timer;
				//obj:要执行动画的对象
				//speed:运动速度
				//target：目标位置
				//
				function move(obj,attr,target,speed,callback){
					
					clearInterval(obj.timer);
					
					var current=parseInt(getStyle(obj,attr));
					
					if(target<current){
						speed=-speed;
					};
					
					obj.timer=setInterval(function(){	
						
						//获取box1原来的left值
						var oldValue=parseInt(getStyle(obj,attr));
						
						//在旧值的基础上添加
						var newValue=oldValue+speed;
						
						//判断newValue是否大于target
						if((newValue<target&&speed<0)||(newValue>target&&speed>0)){
							newValue=target;
						}
						
						//将新的值设置给obj
						obj.style[attr]=newValue+"px";
						
						//当元素移动到target时，停止动画
						if(newValue==target){
							//关闭定时器
							clearInterval(obj.timer);
							//动画执行完毕调用回调函数
							callback&&callback();
						}
						
					},50);
				}

function hasClass(obj,cn){
	var reg=new RegExp("\\b"+cn+"\\b");
	return reg.test(obj.className);
}

function addClass(obj,cn){
	if(!hasClass(obj,cn)){
		obj.className+=" "+cn;
	}
}

function removeClass(obj,cn){
	var reg=new RegExp("\\b"+cn+"\\b");
	obj.className=obj.className.replace(reg,"");
}

function toggleClass(obj,cn){
	if(hasClass(obj,cn)){
		removeClass(obj,cn);
	}else{
		addClass(obj.cn);
	}
}