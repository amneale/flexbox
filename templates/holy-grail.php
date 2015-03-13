<style>
.grail {
    display: flex;
}
.grail-nav,
.grail-content,
.grail-ads {
    padding: 10px;
}

.grail-nav { 
    background: #C23B22;
    order: -1;
}

.grail-content {
    background: #03C03C;
    flex-grow: 1;
}
.grail-ads {
    background: #007EBC;
}

.grail-nav,
.grail-ads { 
    flex-shrink: 0;
    flex-basis: 200px;
}
</style>

<div class="page-header">
    <h1>Practical applications</h1>
    <h2>The Holy Grail</h2>
</div>

<p>One of the most sought after web design layouts, often known as the holy grail of layouts fulfils the following:</p>
<ul>
    <li>Fluid center column, with fixed width sidebars</li>
    <li>Ability to order columns logically in the source, while displaying them in any desired order</li>
    <li>Equal height columns regardless of content</li>
</ul>

<br />
<p>Doing this usually relies on hacks such as faux-columns using repeating background images, over-the-top nesting of divs and some combination of floats or positions.</p>
<p>Using flexbox a much easier solution is possible.</p>

<pre>
&lt;div class="grail"&gt;
    &lt;main class="grail-content"&gt;&hellip;&lt;/main&gt;
    &lt;nav class="grail-nav"&gt;&hellip;&lt;/nav&gt;
    &lt;aside class="grail-ads"&gt;&hellip;&lt;/aside&gt;
&lt;/div&gt;
</pre>
<pre>
.grail { display: flex; }

.grail-nav { order: -1; }

.grail-content { flex-grow: 1; }

.grail-nav,
.grail-ads { 
    flex-shrink: 0;
    flex-basis: 200px;
}
</pre>
<br />
<div class="grail">
    <main class="grail-content">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vel tempus ante. Quisque sit amet efficitur eros. Aenean nec hendrerit urna, a laoreet velit. In ac pretium diam, ut auctor leo. Ut et dui laoreet, vehicula sapien id, viverra metus. Sed ut bibendum libero. Maecenas non felis sed urna ultricies pellentesque nec id purus.
        <br /><br />Sed ac porttitor nunc, ac ullamcorper mauris. Mauris suscipit arcu id ipsum maximus egestas. Fusce aliquet in felis vel congue. Mauris pharetra at sapien sollicitudin sollicitudin. Donec in ornare diam, eget rutrum felis. Vivamus ultrices eros nulla, sed tristique augue vehicula ut. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare ultricies lacus id fringilla. Proin in risus vitae nunc bibendum tincidunt. Nullam vel iaculis lacus. Maecenas euismod, ipsum vel vehicula condimentum, libero mauris fringilla dolor, eget ullamcorper erat lacus quis quam. Sed id neque nibh. Vestibulum sed orci sit amet nunc elementum laoreet id ut risus. Maecenas vehicula placerat porta. Donec eleifend nulla eu odio varius congue. Sed non bibendum leo, quis tincidunt ligula.
    </main>
    <nav class="grail-nav">nav</nav>
    <aside class="grail-ads">ads</aside>
</div>