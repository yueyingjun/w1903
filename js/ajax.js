function ajax(params) {
    if(typeof params!="object"){
        console.error("参数类型必须是json格式")
        return
    }
    if(!params.url){
        console.error("地址必须指定")
        return
    }

    var type=params.type||"get"

    var data=params.data ||"";

    var obj=new XMLHttpRequest();
    obj.onload=function () {
        params.success(obj.response)
    }
    if(type=="get") {
        obj.open("get",params.url+"?"+data)
        obj.send()
    }else{
        obj.open("post",params.url)
        obj.setRequestHeader("content-type","application/x-www-form-urlencoded")
        obj.send(data)

    }

}