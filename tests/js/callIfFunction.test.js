import * as a from '../../resources/js/components/submitdecision';

test('I\'ll think of something', () => {
    const mockCallback = jest.fn(param => 'Hello ' + param);

    a.callIfFunction(mockCallback)._with('john');

    expect(mockCallback.mock.calls[0][0]).toBe('john');
    expect(mockCallback.mock.results[0].value).toBe('Hello john');
});