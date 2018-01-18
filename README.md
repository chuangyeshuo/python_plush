# python_plush
###
在写过几个爬虫程序之后，我们就会知道，利用爬虫获取数据大概的步骤：
请求网页。
获取网页。
匹配信息。
下载数据。
数据清洗。
存入数据库。
###
#1、安装 scrapy 之后，创建一个新项目：
***
$ scrapy startproject zhihuxjj
***
#2、分析一下个人主页可知，个人主页由'https://www.zhihu.com/people/' + 用户 id 组成。

我们要获取的信息是用 callback 回调函数(敲黑板！！划重点！！)的方式设计，这里一共设计了俩个回调函数：用户的关注列表和关注者的个人信息。
***
关注者列表链接构成：
'https://www.zhihu.com/api/v4/members/'
 + 
'用户id'
 + 
'/followees?include=data[*].answer_count,articles_count,gender,follower_count,is_followed,is_following,badge[?(type=best_answerer)].topics&offset=0&limit=20'
个人信息链接构成：
'https://www.zhihu.com/api/v4/members/'
 + 
'用户id'
 + 
'?include=allow_message%2Cis_followed%2Cis_following%2Cis_org%2Cis_blocking%2Cemployments%2Canswer_count%2Cfollower_count%2Carticles_count%2Cgender%2Cbadge%5B%3F(type%3Dbest_answerer)%5D.topics'
***
#3、运行scrapy文件：写好 scrapy 程序后，我们可以在终端输入。
***
$ scrapy crawl zhihuxjj
***
有了数据我们就可以选择，同城市的用户进行研究了……
