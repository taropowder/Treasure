<div class="box box-default">
    <div class="box-header with-border">
        <h3 class="box-title"></h3>

        <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
        </div>

        <form action="{{url('save_manage',$page)}}" method="post">
            <div align="center">
                <textarea id="editor" type="text/plain" style="width:1024px;height:500px;">

                </textarea>
            </div>
        </form>

        <button > 修改</button>
        <script>

            window.onload=function(){
                window.UEDITOR_CONFIG.serverUrl = '{{ config('ueditor.route.name') }}';
                UE.getEditor("editor");
            }


        </script>

    </div>