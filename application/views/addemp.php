<html>
    <title>Add Employee</title>
    <head>

    </head>
    <body>

        <hr>

        FirstName:<input type="firstname" value="" placeholder="firstname"/>
        <br> 

        LastName:<input type="text" value="" placeholder="lastname" />
        <br>

        Date Of Birth:<input type="date" name="dateofbirth">
        <br>

    <td>
        Gender  
        <input type="radio" name="gender" value="M" >M
        <input type="radio" name="gender" value="F">F

    </td> <br>

    <tr>
        Hire Date:<input type="date" name="hiredate">

    <td colspan="1">From:<input type="date" name="fromdate" /></td>
    <td colspan="1">To:<input type="date" name="todate"></td>
</tr> <br>

Title:<input type="text" name="title" placeholder="title" />
<br>



Dept_no<input type="text" name="dept_no" placeholder="dept_no" />

<td colspan="3" align="right">
    Department: 
    <select name="dept">
        <option  value="1" >- -</option>
        <option  value="1" >Sales</option>
        <option value="2" >Engineer</option>
        <option value="3" >Consultant</option>
        <option value="4" >Finance</option>
    </select>
</td> <br>

Salary<input type="text" name="salary" placeholder="salary"></td>

</table><br /> <br />

<input type="submit" value='Addnew Employee' >
<input type = "submit" value="Clear" onclick="reset();"> 


</form>

</body>
</html>