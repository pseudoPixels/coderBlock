
<script type="text/javascript" src="jquery/jquery-1.10.2.js"></script>
<script type="text/javascript">
            $(document).ready(function() {	
				//graceful degradation
				$('select').find('li').hide();
				
				$('select').find('.m_itemMain').toggle(
					function(){
						var $this 	= $(this);
						$this.addClass('m_down').removeClass('m_up');
						var $menu	= $this.prev();
						var t = 50;
						$($menu.find('li').get().reverse()).each(function(){
							var $li = $(this);
							var showmenu = function(){$li.show();};
							setTimeout(showmenu,t+=50);
						});
					},
					function(){
						var $this 	= $(this);
						$this.addClass('m_up').removeClass('m_down');
						var $menu	= $this.prev();
						var t = 50;
						$($menu.find('li').get().reverse()).each(function(){
							var $li = $(this);
							var hidemenu = function(){$li.hide();};
							setTimeout(hidemenu,t+=50);
						});
					}
				);
            });
</script>