'use strict';

Object.defineProperty(exports, "__esModule", {
  value: true
});

exports.default = function () {
  let reporter = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : console.log;
  return function () {
    for (var _len = arguments.length, tasks = Array(_len), _key = 0; _key < _len; _key++) {
      tasks[_key] = arguments[_key];
    }

    return tasks.reduce((current, next) => {
      return current.then(output => {
        const task = next(output);

        // nested Start
        if (task instanceof Promise) {
          return task;
        }

        const name = task.name;
        let taskPromise = null;

        reporter(name, 'start');

        // catch an errors that are outside of task Promise
        try {
          taskPromise = task(reporter.bind(reporter, name, 'info'), reporter);
        } catch (error) {
          reporter(name, 'reject', error);
        }

        return taskPromise.then(result => {
          reporter(name, 'resolve');

          return result;
        }).catch(error => {
          reporter(name, 'reject', error);

          throw error;
        });
      });
    }, Promise.resolve());
  };
};