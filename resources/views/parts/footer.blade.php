@php $menu =['legal']; @endphp
<footer>
    @foreach ($menu as $element)
    <span>&copy; Blucket List - <a style='color:whitesmoke; list-style:none; text-decoration:none; 'href="/{{ str_replace(" ", "-",strtolower($element))}}">Mention Légale</a>- 2022 Giustina_Development</span>
  @endforeach
   
</footer>