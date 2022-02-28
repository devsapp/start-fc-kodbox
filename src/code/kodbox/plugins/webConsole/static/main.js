kodReady.push(function(){
	Events.bind('main.menu.loadBefore',function(listData){ //添加到左侧菜单栏
		listData['{{package.id}}'] = {
			name:"{{package.name}}",
			url:'{{pluginHost}}lib/',
			subMenu:'{{config.menuSubMenu}}',
			target:'{{config.openWith}}',
			icon:'ri-terminal-box-fill bg-grey-10'
		}
	});
});