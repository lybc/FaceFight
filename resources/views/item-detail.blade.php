@extends('layout')
@section('title', 'detail')
@section('main')
    <div id="mainContext">
        <div class="ui segment">
            <div class="ui medium header">Medium Header</div>
            <div class="ui grid">
                <div class="four wide column">
                    <a class="ui blue image label"><img src="http://placehold.it/100x100"> Veronika <div class="detail">作者</div></a>
                </div>
                <div class="four wide column"></div>
                <div class="eight wide column">
                    <div class="ui labeled button" tabindex="0">
                        <div class="ui green button"><i class="heart icon"></i> 点赞 </div>
                        <a class="ui basic green left pointing label">
                            1,048
                        </a>
                    </div>
                    <div class="ui labeled button" tabindex="0">
                        <div class="ui basic blue button"><i class="fork icon"></i> 关注 </div>
                        <a class="ui basic left pointing blue label">
                            1,048
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="ui segment">
            <div class="ui ten cards">
                @foreach(range(1, 20) as $item)
                <a class="yellow card">
                    <div class="image">
                        <img src="http://placehold.it/100x100">
                    </div>
                </a>
                @endforeach
            </div>

        </div>
        <div class="ui segment">
            关于 Tiicle#

            Tiicle 是一个记录和分享编程技巧的网站。
            Tiicle 的价值观是：高质量的记录，让我们的编码能更加高效。更多关于 Tiicle 的介绍，请阅读 关于 Tiicle。为了让你的知识对别人更有价值，请参考以下。

            行文最佳实践#

            标题要清晰、释义，方便检索#

            这样的标题方便你通过搜索框快速定位到文章：

            file

            以下是一些 不合格的标题 与 → 优秀的标题 对应的例子：

            『Laravel 速记』→『Laravel 数据模型下，限定范围（Query Scope）的优先级』
            『我喜欢正则表达式』 →『正则表达式贪婪模式下，Ruby 和 JavaScript 的区别』
            『OpenSSL 升级』→『CentOS 6.5 下 OpenSSL 的心脏出血安全漏洞修补笔记』
            小技巧分享：思考你下次遇到类似任务时，会搜索什么关键词？将联想到的关键词组成标题即可。
            环境描述和前提条件#

            如果文章要求在特定软件环境下，或者需要前提条件，请在文章中提供前置说明。参考以下的几个例子：

            『在这篇文章中假定你的代码运行在 Ubuntu 16.10 系统下的 PHP7.1 版本』
            『请在运行以下代码前参考官方文档 http://... 里的配置 』
            『为了行文方便，以下命令行使用 root 运行，请依照你的环境做相应调整』
            也可为文章设置标签作为 特定版本 的标记，如为文章设置上 Laravel 5.4 的标签。

            关联性标签#

            每篇文章最多可设置 3 个 关联性最强 的标签，标签的设置能够增加文章的曝光，使更多的人从你的文章中获益。

            标签选择上，请使用技术话题，如 CSS, HTML, Laravel, Ruby On Rails。错误的例子如：错误信息, 有个Bug, 又报错了。

            为了保持标签的整洁，目前文章的标签由管理员设置。
            内容要详尽、易懂#

            撰写文章时，要假设自己是个路人读者，尽量追求 完整性 和 易读性。这不仅是为了提高你要分享内容的价值，更重要的是：一年后你翻阅此篇文章时，记录太潦草的话，可能连自己都会看不懂，也就违背了记录的初衷。

            一些技巧供参考：

            文章顶部书写 前置说明 或者 问题描述，说明文章的来龙去脉；
            步骤很多的长文章中，在开头提供一个 步骤简略 的区块，这样让文章思路更加清晰；
            提供 效果截图，在讲解某个 命令行指令 或者 网页效果 时，截图植入文章中会极大提高可读性；
            附上 输出结果，与上一条类似，在讲解某个命令时，附上输出的 文字输出；
            提供 扩展阅读，对一些文章中无法详细叙述的知识点，可以在文章结尾提供参考链接；
            注意事项#

            撰写文章时，以下几点需要特别注意。

            尊重版权#

            请注意文字和图片引用的版权问题。如果你发现 Tiicle 上有侵权文章，请联系我 summer AT yousails.com （请把 AT 换为 @ ）。

            保密协议#

            有些公司限定了员工对内容软件业务逻辑的保密行为。在记录文章时，请注意你与雇主签署的保密协议，请将记录的文字控制在保密协议规定的范围之内。

            禁止发布的内容类型#

            反动、政治、色情。
            一旦发现，将会直接封号处理。

            干净的排版#

            一个干净的排版，有利于你行文思路的整理。

            中文技术文档的写作指南
            中文文案排版指北
            以上文档的额外补充：

            合理的使用代码高亮；
            保持段落简短；
            总结#

            不懂记录的程序员，不是好工程师，请认真对待每一次的记录。
        </div>
        <div class="ui segment">
            <div class="ui minimal comments">
                <h3 class="ui dividing header">评论</h3>
                @foreach(range(1,20) as $item)
                    <div class="ui segment">
                        <div class="comment">
                            <a class="avatar">
                                <img src="http://placehold.it/100x100">
                            </a>
                            <div class="content">
                                <a class="author">Matt</a>
                                <div class="metadata">
                                    <span class="date">Today at 5:42PM</span>
                                </div>
                                <div class="text">How artistic! </div>
                                <div class="actions">
                                    <a class="reply">Reply</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection