for i in `cat .confs | grep _CONFIG_TPL`
do
    template_file=`echo $i | cut -d "=" -f2-`
    if [ -z "$template_file" ]
    then
        continue
    fi
    config_file=`echo $template_file | awk -F'.tpl' '{print $1}'`
    cp -v $template_file $config_file
    container=`echo $i | awk -F'_CONFIG_TPL' '{print $1}'`
    for j in `cat .confs | grep "^$container" | awk -F'=' '{print $1'}`
    do
        k=`cat .confs | grep "^$j=" | cut -d "=" -f2-`
        sed -i "s~$j~${k}~g" $config_file
    done
done
