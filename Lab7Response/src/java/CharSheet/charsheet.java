package CharSheet;

import java.io.IOException;
import java.io.PrintWriter;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

@WebServlet(name = "charsheet", urlPatterns = {"/charsheet"})
public class charsheet extends HttpServlet {

    protected void processRequest(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        response.setContentType("text/html;charset=UTF-8");
        try ( PrintWriter out = response.getWriter()) {
            out.println("<!DOCTYPE html>");
            out.println("<html>");
            out.println("<title>Character Creation</title>");
            out.println("<h2>Character Sheet</h2>");
            out.print("Character Name: " + request.getParameter("charname") + "<br>");
            out.print("Class: " + request.getParameter("class") + "<br>");
            out.print("Strength: " + request.getParameter("strength") + "<br>");
            out.print("Dexterity: " + request.getParameter("dexterity") + "<br>");
            out.print("Intelligence: " + request.getParameter("intelligence") + "<br>");

            out.println("</html>");

           
        }
    }

    @Override
    protected void doGet(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        processRequest(request, response);
    }

    @Override
    protected void doPost(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        processRequest(request, response);
    }

    @Override
    public String getServletInfo() {
        return "Short description";
    }

}
