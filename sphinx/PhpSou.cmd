@cls
@ SET TITLE=【PhpSou开源搜索引擎sphinx支持】
@title %TITLE%
@ECHO %TITLE%

@set path=.;bin;%path%
@ECHO. && @ECHO 构建索引
@bin\indexer -c D:\sphinx\bin\sphinx.conf test1 --rotate
@ECHO. &&@ECHO 启动服务
@bin\searchd -c D:\sphinx\bin\sphinx.conf

