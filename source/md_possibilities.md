# Using `<details>` in GitHub


Suppose you're opening an issue and there's a **lot noisey logs** that _may_ be useful.

Rather than wrecking readability, wrap it in a `<details>` tag!

```md
<details>
 <summary>Summary Goes Here</summary>
 ...this is hidden, collapsable content...
</details>
```

> https://developer.mozilla.org/en-US/docs/Web/HTML/Element/details

## A collapsible section with markdown
<details>
  <summary>Click to expand!</summary>
  
```python
def func():
    return 'hello, world!'
```
</details>

## Nested

<details><summary> root </summary><blockquote>

<details><summary> bin </summary><blockquote>

<details><summary> nest1 </summary><blockquote>

~~~
a
b
c
~~~
</blockquote></details>
<details><summary> nest2 </summary><blockquote>

a
b
c
</blockquote></details>

~~~
file1
file2
file3
~~~
</blockquote></details>

<details><summary> boot </summary><blockquote>

x
y
z
</blockquote></details>

<details><summary> dev </summary><blockquote>

p
q
r
</blockquote></details>

<details><summary> etc </summary><blockquote>

e
t
c
</blockquote></details>

<details><summary> home </summary><blockquote>

me
you
everyone
</blockquote></details>

<details><summary> lib </summary><blockquote>

lib
er
ate
</blockquote></details>

</blockquote></details>
