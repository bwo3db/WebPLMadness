import { Component } from '@angular/core';
import { HttpClient, HttpErrorResponse, HttpParams } from '@angular/common/http';
import { Observable } from 'rxjs';
import { User } from './user';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent {
  title = 'ang-login';

  userModel = new User('', '');

  data_sumbitted = '';

  response_data = '';
  err_msg = [];

  constructor(private http: HttpClient) {
  }

  subPost(form: any) {
    console.log(form)
    this.data_sumbitted = form;

    // Convert the form data to json format
    let params = JSON.stringify(form);

    console.log(params);

    this.http.post('http://localhost/webplmadness/backend_login.php', params, { responseType: 'text' })
      .subscribe(
        res => {
          let someString = res;
          let len_header = "<!--Authors: Benjamin Ormond, and Nathan Park-->".length;
          let index_curl = res.indexOf('}') + 1;
          someString = someString.slice(len_header, index_curl);
          var jsonObject = JSON.parse(someString);
          this.response_data = jsonObject.result;
          if (this.response_data == "good") {
            window.location.assign('http://localhost/webplmadness/index.php');
          }
          else if (this.response_data == "ep") {
            this.err_msg = ["Email not recognized", "Password incorrect"];
          }
          else {
            this.err_msg = ["Password incorrect"];
          }
        }
      );
  }
}
