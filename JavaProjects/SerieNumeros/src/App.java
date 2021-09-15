public class App {
    public static void main(String[] args) throws Exception {
        int a =1;
        int b =2;
        int c =10;
        int suma =0;

        System.out.println(a);
        System.out.println(b);
        int x = 1;
        do{
            suma = a+b;
            System.out.println(suma);
            a = b;
            b = suma;
            x++;
        }while (x<=c);
    }
}
