# Twig PHP (Without Composer)

A ready-to-use example for using Twig template engine without needing to **Composer** in **PHP**.

### Story of this Twig example

**Twig** is one of the popular and good engines which is suitable for most needs for templates. But the main problem is that it's a complex library and there are many sub directories and files. You have to use Composer in your project.

So what about if your current code bases is not going to use Composer?

Yeah, so this is the goal of this repository to provide a ready to use example for using Twig without Composer. so easily can use latest version of Twig without needing to Composer.

### Using

```sh
$ php example.php
```

### Twig Version

In the current time, the latest version of Twig is 3.4.1, if you are trying to use this template in future maybe you can check https://github.com/twigphp/Twig/tags page to use the latest version.

For example you can download latest version as ZIP file. such as https://github.com/twigphp/Twig/archive/refs/tags/v3.4.1.zip

### Demo

**Input:**

```
<h1>Hello {{ name }}!</h1>
```

**Output:**

```
Hello Max!
```

### Performance

The takes time to include files and run the engine and print the example output was 0.0048439502716064s which is super fast.
