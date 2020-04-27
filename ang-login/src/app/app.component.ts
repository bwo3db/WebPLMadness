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

  response_data = new User('', '');

  constructor(private http: HttpClient) {
  }

  // sendPost(email: any, password: any): Observable<any> {
  //   console.log(email);
  //   console.log(password);
  //   return this.http.post("http://localhost/webplmadness/backend_login.php", email, { responseType: 'text' });
  // }

  subPost(form: any) {
    console.log(form)
    this.data_sumbitted = form;

    // Convert the form data to json format
    let params = JSON.stringify(form);

    console.log(params);

    this.http.post('http://localhost/webplmadness/backend_login.php', params)
      .subscribe(
        res => {
          console.log(res);
        }
      );
    // .subscribe((data) => {
    //   console.log(data);
    //   // Receive a response successfully, do something here
    //   // console.log('Response from backend ', data);
    //   // this.response_data = data;     // assign response to responsedata property to bind to screen later
    // }, (error) => {
    //   // An error occurs, handle an error in some way
    //   console.log('Error ', error);
    // })
  }
}
