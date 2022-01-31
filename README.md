
                    Symfony 5 Restful API

* İstanilen çalışmaya göre oluşturulan Entities'ler;

    Company, 
    Order,
    Product,
    Login işlemleri için User , şeklindedir.

* İstenilen çalışmada Symfony 5.4 + x sürümleri ile yapılmıştır.
* Daha geniş paket olan web paketi kurulmuştur. 
   ( symfony new --webapp my_project ) Brçok farklı şekilde de kurulabilmektedir. Hepsi ile denedim kurmayı farkını görmek için.
    

* Api platfrom kullanılarak Swagger UI tasarlandı. Sonrasında Postmanda test edilebilir şeklinde Annotionlar ve Security kurulumları ve kodlaması yapıldı.

* JWT Token alınması sağlatıldı. 

https://github.com/lexik/LexikJWTAuthenticationBundle/blob/2.x/Resources/doc/index.md#installation ilgili  doküman takip edildi.

* symfony/security:encoder-password paket ile token oluşturmak için kullanıcı şifresi kodlandı.

￼

* Openssl ile jwt token için public ve private key elde edildi.

* Postman ile JWT Token elde edildi ve girişi sağlatıldı.

* Http request istekleri  (server:port)/api JWT sağlandıktan sonra Swagger UI dan test edilebilir istenilen senaryonuza göre.

* Veri tabanı olarak sqlite kullanıldı. Diğer veri tabanşarı noktasında driver noktasında hatalar aldım. Araştırmlarım sonucu donanımdal bir sorundan(yeterli disk alanım yok idi.) kaynaklı olduğunu symfony dökümanlarında okudum. Onun için tercih edildi.
￼
NOT: Tasarım yapılarak ilerlenilmesi başta düşünüldü fakat zaman yeterli olmadığından tasarım eklenilmemiştir. Ek olarak 

İstenilenler  %100 değil %75-80 civarında tamamlanmıştır. 

* Umarım yapabilirliğimi sizlere göstermiş olup birlikte çalışma imkanı bulabilirim.

Sağlıcakla kalınız.

