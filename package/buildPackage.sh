rm -f ./build/*.zip
rm -rf ./build/esiTemplate
rm -f lscache-latest.zip
cd ../com_lscache
zip -r ../package/build/com_lscache.zip ./*
cd ../lscache_plugin
zip -r ../package/build/lscache_plugin.zip ./*
cp -r ../esiTemplate ../package/build/

cd ../package/build
zip -r ../lscache-latest.zip ./*
cd ..
rm -f ./build/*.zip
rm -rf ./build/esiTemplate
echo Latest package has been built to lscache-latest.zip

