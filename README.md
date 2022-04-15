# Steodec Project

### Micro framework with ORM, Router

Micro framework develop by Steodec for php8.1 with custom ORM and custom Router Annotation

## 📕 Contents

- [Requirements](#hammer-requirements)
- [Installation](#building_construction-installation)
- [Usage](#thought_balloon-usage)
- [About](#cook-author)
- [License](#page_with_curl-license)

## ⚒️ Requirements

- [PHP >=8.1](https://www.php.net/releases/8.1/en.php)
- 
- ext-dom: *
- ext-pdo: *

## 🏗️ Installation

`composer create-project steodec/project project_name`

## 🎈 Usage

### Controllers

```php
namespace Steodec\Controllers;

use Steodec\Project\controllers\AbstractControllers;
use Steodec\Router

class Home extends AbstractControllers {
   
    #[Routes(method:'GET', path: "/", name: 'HOME_PAGE', isGranted: 'SHOW_HOMEPAGE')]
    public function index() {
        echo "Hello World";
    }
}
```

### Entity

```php
namespace Steodec\Entities;

use Steodec\Project\entities\AbstractEntity;

class Users extends AbstractEntity {
    
    const TABLE_NAME = "users";

    public string $username;
    public string $email;
    public string $password;
    
    public function __construct()
    {
        parent::__construct($this);
    }
}
```

## 🍪 Author

I'm **[Steodec](https://humbrain.com)**. A passionate, zen &amp; dedicated software engineer 😊

You can keep in touch with me at: *paul.tedesco@humbrain.com* 📮

[![steodec][github-image]](https://github.com/steodec)

---

[![Steodec](https://www.gravatar.com/avatar/482e600208e6b254cc65970edb64c42f?s=200&r=g&d=mp)](https://humbrain.com "Steodec")

## 📃 License

**Steodec Project** is distributed under [MIT](https://opensource.org/licenses/MIT) license 🚀 Enjoy! ❤️

[github-image]: https://img.shields.io/badge/GitHub-100000?style=for-the-badge&logo=github&logoColor=white