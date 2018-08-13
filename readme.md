## coding 習慣

不知道貴公司的命名習慣，我個人是習慣 method 以底線作為分隔，class 本身是駝峰式命名，controller 的 method 按照功能性分為 view 和 api，model 使用上如果取出多筆宣告變數會是複數型態。

## 頁面簡介

- routes/web.php

因為是個簡單的免登入式 CRUD 網站，所以路由部分並不複雜，若有登入功能的話會加上 middleware。

- app/Http/Controllers/UserController.php

MVC 的 C，負責使用者管理介面的邏輯處理部分。

- app/User.php

MVC 的 M，負責 User 資料表的設定及操作部分。

- resources/views/user

MVC 的 V，內有列表以及更新的介面。
