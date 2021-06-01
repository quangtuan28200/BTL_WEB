<div class="content grid">
    <div class="Container wide">
        <div class="wrapper">
            <h3>Product category list</h3>
            <table>
                 <tr>
                     <th>STT</th>
                     <th>Name</th>
                     <th>CreatedAt</th>
                     <th>Action</th>
                 </tr>
                 <tr>
                     <td>1</td>
                     <td>Maria Anders</td>
                     <td>Germany</td>
                     <td>
                         <a href="#">Modify</a>
                         <a href="#">Delete</a>
                     </td>
                 </tr>
                 <tr>
                     <td>2</td>
                     <td>Francisco Chang</td>
                     <td>Mexico</td>
                     <td>
                         <a href="#">Modify</a>
                         <a href="#">Delete</a>
                     </td>
                 </tr>
                 <tr>
                     <td>3</td>
                     <td>Roland Mendel</td>
                     <td>Austria</td>
                     <td>
                         <a href="#">Modify</a>
                         <a href="#">Delete</a>
                     </td>
                 </tr>
                 <tr>
                     <td>4</td>
                     <td>Helen Bennett</td>
                     <td>UK</td>
                     <td>
                         <a href="#">Modify</a>
                         <a href="#">Delete</a>
                     </td>
                 </tr>
                 <tr>
                     <td>5</td>
                     <td>Yoshi Tannamuri</td>
                     <td>Canada</td>
                     <td>
                         <a href="#">Modify</a>
                         <a href="#">Delete</a>
                     </td>
                 </tr>
                 <tr>
                     <td>6</td>
                     <td>Giovanni Rovelli</td>
                     <td>Italy</td>
                     <td>
                         <a href="#">Modify</a>
                         <a href="#">Delete</a>
                     </td>
                 </tr>
             </table>
             <a href="?management&category&create">ADD</a>
             <form id="add_category" action="./handle.php" method="post">
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" class="form-control" id="" placeholder="Enter Name">
                </div>
            
                <button type="submit" class="">ADD</button>        
            </form>
        </div>
    </div>
</div>