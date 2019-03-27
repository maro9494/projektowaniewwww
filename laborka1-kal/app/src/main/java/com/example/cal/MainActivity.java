package com.example.cal;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.AdapterView;
import android.widget.ArrayAdapter;
import android.widget.Button;
import android.widget.Spinner;
import android.widget.TextView;

public class MainActivity extends AppCompatActivity implements AdapterView.OnItemSelectedListener {



    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        wynik = (TextView)findViewById(R.id. TextView01);


        przycisk = (Button)findViewById(R.id.Przycisk);
        przycisk.setText("Kliknij");
        przycisk.setOnClickListener(myClickListener);


        spinnerOpcje = (Spinner)findViewById(R.id.Spinner3);
        ArrayAdapter<String> adapter = new ArrayAdapter<String>(
                this, android.R.layout.simple_spinner_item, opcje);
        adapter.setDropDownViewResource(android.R.layout.simple_spinner_dropdown_item);
        spinnerOpcje.setAdapter(adapter);
        spinnerOpcje.setOnItemSelectedListener(this);

    }
    public void onItemSelected (AdapterView<?> p, View v, int position, long id) {
        opselected=opcje[position];
        wynik.setText("Wybrałes " + opselected);
    }
    public void onNothingSelected(AdapterView<?> p) {
        wynik.setText("Wybierz opcje");
    }


    @Override
    public void onPointerCaptureChanged(boolean hasCapture) {

    }
    Button przycisk;
    TextView wynik;
    Spinner spinnerOpcje;
    String[] opcje={"Wybierz opcje ","dodawanie","odejmowanie","mnozenie","dzielenie"};
    String opselected;
    int a, b, c;
    private View.OnClickListener myClickListener = new View.OnClickListener()
    {
        public void onClick(View v) {
            Spinner spinnernum1=(Spinner)findViewById(R.id.Spinner1);
            Spinner spinnernum2=(Spinner)findViewById(R.id.Spinner2);
            a=Integer.parseInt(String.valueOf(spinnernum1.getSelectedItemId()));
            b=Integer.parseInt(String.valueOf(spinnernum2.getSelectedItemId()));
            if (opselected=="dodawanie"){c=a+b; wynik.setText(Integer.toString(c));}
            else if (opselected=="odejmowanie"){c=a-b; wynik.setText(Integer.toString(c));}
            else if (opselected=="mnozenie"){c=a*b; wynik.setText(Integer.toString(c));}
            else if (opselected=="dzielenie"){c=a/b; wynik.setText(Integer.toString(c));}
            else {wynik.setText("Wybierz opcje");}


        }
    };

}
