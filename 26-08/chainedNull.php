class A {
    public function foo() {
        echo "Calling foo() in class A\n";
        return $this;
    }
}

class B {
    public function bar() {
        echo "Calling bar() in class B\n";
        return $this;
    }
}

class C {
    public function baz() {
        echo "Calling baz() in class C\n";
        return $this;
    }
}

$a = new A();
$a->foo()->bar()->baz();