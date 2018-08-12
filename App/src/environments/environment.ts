// The file contents for the current environment will overwrite these during build.
// The build system defaults to the dev environment which uses `environment.ts`, but if you do
// `ng build --env=prod` then `environment.prod.ts` will be used instead.
// The list of which env maps to which file can be found in `.angular-cli.json`.

export const environment = {
  production: false,
  bachelorAPI: {
    url: 'https://ehlersdanlossite.000webhostapp.com/api/v1',
    endPoints: {
      diseases: '/diseases',
      rights: '/rights',
      devices: '/devices',
      practitioners: '/practitioners',
      symptoms: '/symptoms',
      typepractitioners: '/typepractitioners',
      typenews: '/typenews',
      login: '/login',
      users: '/users',
      countries: '/countries',
      faqs: '/faqs',
      news: '/news',
      askpractitioners: '/askpractitioners',
      contact: '/contact',
      exercisesexamples: '/exercisesexamples',
      exercisetherapies: '/exercisetherapies',
      manualtherapies:  '/manualtherapies',
      typeexercisesexamples:  '/typeexercisesexamples',
      typeexercisetherapies:  '/typeexercisetherapies',
      typeagencies: '/typeagencies',
      forgotpassword: '/forgot/password',
      resetpassword: '/reset/password',
    }
  }
};




