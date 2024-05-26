# topdata-theme-demoshop65-sw6




## Installation via CLI
```bash
alias c='$(pwd)/bin/console'
cd custom/plugins
git clone git@github.com:topdata-software-gmbh/topdata-theme-demoshop65-sw6.git topdata-theme-demoshop65-sw6
c plugin:refresh
c plugin:install -ac TopdataThemeDemoshop65SW6
c theme:change --all TopdataThemeDemoshop65SW6
# maybe you need to compile the theme
php bin/console theme:compile
```
