<%@ taglib prefix="c" uri="http://java.sun.com/jsp/jstl/core" %> 
<%@page contentType="text/html" pageEncoding="UTF-8"%>
<%@ page import="students.Student" %> 

<%
    Student stockAttribute = (Student) request.getAttribute("student");
    if (stockAttribute == null) {
        stockAttribute = new Student();
    }
%>

<title>Fake High School</title>

<h2>Student Grades</h2>

<table>
    <tr>
        <th>Name</th>
        <th>Year</th>
        <th>GPA</th>
    </tr>

    <c:forEach var="StudentInList" items="${students}">
        <tr>
            <td>${StudentInList.name}</td>
            <td>${StudentInList.year}</td>
            <td>${StudentInList.GPA}</td>
        </tr>
    </c:forEach>
</table>