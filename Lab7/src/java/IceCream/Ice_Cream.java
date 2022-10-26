package IceCream;

import java.io.IOException;
import java.io.PrintWriter;
import java.util.Enumeration;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

@WebServlet(name = "IceCream", urlPatterns = {"/IceCream"})
public class Ice_Cream extends HttpServlet {

    protected void processRequest(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        response.setContentType("text/html;charset=UTF-8");
        try ( PrintWriter out = response.getWriter()) {
            out.println("<!DOCTYPE html>");
            out.println("<html>");
            out.println("<title>Treat Transporters</title>");
            out.println("<h2>Your Order</h2>");
            out.println("</html>");

            String parameterName = "";
            Enumeration enumeration = request.getParameterNames();
            while (enumeration.hasMoreElements()) {
                parameterName = (String) enumeration.nextElement();
            }
            
             String[] ice_cream = request.getParameterValues("ice_cream");

            for (String ice_creams : ice_cream) {
                out.println("Ice Cream: " + ice_creams + "<br>");
            }

            String[] toppings = request.getParameterValues("toppings[]");

            for (String topping : toppings) {
                out.println("Topping: " + topping + "<br>");
            }
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
