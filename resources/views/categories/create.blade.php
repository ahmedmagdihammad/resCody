<!DOCTYPE html>
<html>
<head>
<style>
td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2>HTML Table</h2>

<form method="POST" action="{{route('categories.store')}}">
    @csrf
    @method('post')
    <table border="1">
        <tr>
            <td>name</td>
            <td>
                <input type="text" name="name" size="20" placeholder="Enter Name Catgeory">
            </td>
        </tr>
        <tr>
            <td>Your E-mail address</td>
            <td><select name="parent_id" id="parent_id">
                <option value=" ">- Select Parent Category -</option>
                @foreach($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
            </td>
        </tr>
    </table>
    <P><input type="submit" value="Submit"></P>
</form>

</body>
</html>
