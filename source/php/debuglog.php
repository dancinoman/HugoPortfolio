<?php

function debug_log($to_debug){

			?> <script type="text/javascript">
									//uses many version for browsers for console.log
									var isFirefox = typeof InstallTrigger !== 'undefined';
									var isChrome = !!window.chrome && !!window.chrome.webstore;

									if(isChrome)
									{
									  console.log("%cPHP debug log <?php echo "(".$to_debug.")"; ?>", "background: #ffbb00; font-weight: bold");
									}
									else if(isFirefox)
									{
										console.log("%cPHP debug log <?php echo "(".$to_debug.")"; ?>", "background: #ffbb00; font-weight: bold; color: black");
									}
									else
									{
										console.log("PHP debug log <?php echo "(".$to_debug.")"; ?>");
									}
					</script> <?php
}
