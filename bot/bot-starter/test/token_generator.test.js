const jwt = require('jsonwebtoken');
const tokenGenerator = require('../src/token_generator');

describe('#tokenGenerator', () => {
  it('generates a new token', () => {
    const token = tokenGenerator();
    const decoded = jwt.decode(token.token, {complete: true});

    expect(decoded).toHaveProperty('payload.grants.identity', token.identity);
    expect(decoded).toHaveProperty('payload.grants.chat.service_sid');
    expect(decoded.payload.grants.chat.service_sid).toStartWith('IS')
    expect(decoded).toHaveProperty('payload.grants.data_sync.service_sid');
    expect(decoded.payload.grants.data_sync.service_sid).toStartWith('IS')
  });

  it('generates a new token using the specified identity', () => {
    const identity = "Alice";
    const token = tokenGenerator(identity);
    const decoded = jwt.decode(token.token, {complete: true});

    expect(token.identity).toEqual(identity);
    expect(decoded).toHaveProperty('payload.grants.identity', token.identity);
  });


});
