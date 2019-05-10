<div class="box box-default">
    <div class="box-header with-border">
        <h3 class="box-title"></h3>

        <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
        </div>

        <form method="post">
            @csrf
            <div align="center">
                <textarea id="editor"  name="content" type="text/plain" style="width:1024px;height:500px;">@include('admin.index')</textarea>
            </div>
            <div class="col-md-8">
                <div class="btn-group pull-right">
                    <button type="submit" class="btn btn-primary">提交</button>
                </div>
            </div>
        </form>


        <script>

            window.onload=function(){
                window.UEDITOR_CONFIG.serverUrl = '{{ config('ueditor.route.name') }}';
                UE.getEditor("editor");
            }


        </script>

    </div>
</div>