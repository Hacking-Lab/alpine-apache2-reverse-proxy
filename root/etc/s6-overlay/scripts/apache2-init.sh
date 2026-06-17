#!/command/with-contenv bash

set -euo pipefail

source /etc/hluser

mkdir -p /run/apache2 /var/www/localhost
rm -rf /var/www/localhost/htdocs
ln -s /opt/www /var/www/localhost/htdocs
chown -R root:root /opt/www /opt/backend
